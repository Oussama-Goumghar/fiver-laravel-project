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
}
