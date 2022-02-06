<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Http\Resources\UserResource;


class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {

        $user = User::where('is_deleted', false)->where('email', $request->input('email'))->first();
        if ($user) {
            $this->check($request->input('password'), $user->password);
        }

        $validated = $request->validated();
        if (!$token = auth('api')->attempt($validated)) {

            return (new UserResource(null))->additional([
                'errors' => ['authentication' => ['Unauthorized']],
            ])->response()->setStatusCode(401);
        }

        return $this->createNewToken($token);
    }

}
