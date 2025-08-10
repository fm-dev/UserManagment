<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
class AuthController extends Controller
{
    //login method to handle user authentication
    public function login(Request $request)
    {
        if ($request['username'] === 'admin' && $request['password'] === '123') {
            // Data user dummy
            $user = [
                'id'       => 1,
                'username' => 'admin',
                'role'     => 'admin',
                'status'   => 'active'
            ];

            $payload = JWTFactory::sub($user['id'])
            ->claims([
                'username' => $user['username'],
                'role'     => $user['role'],
                'status'   => $user['status'] 
            ])
            ->make();

            $token = JWTAuth::encode($payload)->get();

            return response()->json([
                'token' => $token,
                'user' => $user
            ]);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
    // method to handle extract token 
    public function extractToken(Request $request)
    {
        $request->validate([
            'token' => 'required|string'
        ]);
        $token = $request->bearerToken();

        if(!$token)
        {
            return response()->json(['error' => 'Token not provided'], 401);
        }
        try
        {
            $payload = JWTAuth::setToken($token)->getPayload();
            return response()->json([
                'payload' => $payload->toArray()
            ]);
        }
        catch(\Exception $e)
        {
            return response()->json(['error' => 'Token is invalid'], 401);
        }
    }
}
