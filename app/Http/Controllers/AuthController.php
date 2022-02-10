<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgetPasswordRequest;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Resources\ForgetPassResource;
use App\Http\Resources\UserResource;
use App\Mail\Authentication\AccountWating;
use App\Mail\Authentication\UserWaiting;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use stdClass;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'forgetPassword', 'reset']]);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        return response()->json([
            'errors' => null,
            'data' => [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth('api')->factory()->getTTL() * 24 * 7,
                'email_verified_at' => auth('api')->getUser()->email_verified_at,
                'name'  => auth('api')->getUser()->name,
                'role' => auth('api')->getUser()->role,
                'is_email_verified' => auth('api')->getUser()->is_email_verified,
                'email' => auth('api')->getUser()->email,
                'profile_picture' => auth('api')->getUser()->profile_picture
            ],
        ]);
    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        if (!$token = auth('api')->attempt($validated)) {

            return (new UserResource(null))->additional([
                'errors' => ['authentication' => ['Username or Password is incorrect!']],
            ])->response()->setStatusCode(401);
        }
        return $this->createNewToken($token);
    }
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();
        return (new UserResource(null))->additional([
            'errors' => null,
        ])->response()->setStatusCode(200);
    }
    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        $filename = null;
        $data = array_merge(
            $validated,
            ['password' => bcrypt($request->password)]
        );
        $cap = ucwords($request->input('name'));
        $data['name'] = $cap;
        $data['email'] = $request->input('email');
        $data['deptid'] = $request->input('deptid');
        $data['employeeid'] = $request->input('employeeid');
        $data['role'] = 'user';
        if ($request->hasfile('profile_pic')) {
            $avatar = $request->file('profile_pic');
            $filename = $data['employeeid'] . '.' . $avatar->getClientOriginalExtension();
            $destination_path = public_path('storage/profile');
            $avatar->move($destination_path, $filename);
        }
        $data['profile_picture'] = $filename;
        $user = User::create($data);
        event(new Registered($user));
        Mail::to($data['email'])->send(new AccountWating($data));
        $admin = User::where('is_deleted', false)->where('role', 'admin')->pluck('email');
        Mail::to($admin)->send(new UserWaiting($data));
        return (new UserResource($user))->additional([
            'errors' => null,
        ])->response()->setStatusCode(201);
    }
    /**
     *
     * Forget password
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function forgetPassword(ForgetPasswordRequest $request)
    {
        $input = $request->only('email');
        $response =  Password::sendResetLink($input);
        $user = User::where('is_deleted', false)->where('email', $request->email)->first();
        if ($user == null) {
            $message = "We could not find a user with this email address";
        } else {
            if ($response == Password::RESET_LINK_SENT) {
                $message = "Mail send successfully";
            } else {
                $message = "Email could not be sent to this email address";
            }
        }
        return (new UserResource(null))->additional([
            'errors' => null,
            'message' => $message
        ])->response()->setStatusCode(200);
    }
    public function reset(ResetPasswordRequest $request)
    {
        $reset_password_status = Password::reset($request->only('password', 'password_confirmation','token','email'), function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        });

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return response()->json(["errors" =>  ["Invalid token provided"]], 400);
        }
        return response()->json(["msg" => "Password has been successfully changed", "errors" => []], 200);
    }
}
