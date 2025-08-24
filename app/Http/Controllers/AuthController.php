<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use App\Models\User_app;
class AuthController extends Controller
{
    //login method to handle user authentication
    public function login(Request $request)
    {
            $request->validate([
                'username' => 'required|string|max:255',
                'password' => 'required|string|min:6',
            ]);

            $user = User_app::where('username', $request->username)->first();
            
            if (!$user || !password_verify($request->password, $user->password)) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
            
            $payload = JWTFactory::sub($user->id)
                ->claims([
                    'username' => $user->username,
                    'role'     => $user->role,
                    'status'   => $user->status
                ])
                ->make();
                
            $token = JWTAuth::encode($payload)->get();

            return response()->json([
                'token' => $token,
                'user' => [
                    'id'       => $user->id,
                    'username' => $user->username,
                    'role'     => $user->role,
                    'status'   => $user->status
                ]
            ])->cookie('jwt_token', $token, 60 * 24 * 7);
            

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

    public function Registration(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'app_name' => 'required|string|max:255',
            'role' => 'required|string|max:255'
        ]);

        try{

            $userCheck = user_app::where('username', $request->username)->first();
            if($userCheck)
            {
                return response()->json(['error' => 'Username already exists'], 400);
            }

            $user = user_app::create([
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'app_name' => $request->app_name,
                'role' => $request->role,
                'created_by' => $request->created_by,
            ]);
            return response()->json([
                'message' => 'User registered successfully',
                'user' => $user
            ], 201);

        }
        catch(\Exception $e)
        {
            return response()->json(['error' => 'Registration failed: ' . $e->getMessage()], 500);
        }
    }

    public function index(){
        return view('pages.login'); 
    }

    public function loginWeb(Request $request)
    {
        $request->validate([
                'username' => 'required|string|max:255',
                'password' => 'required|string|min:6',
        ]);
        $login = $this->login($request);
        if(isset($login->original['error'])){
            return redirect('/')->with('error', $login->original['error']);
        }
        $token = $login->original['token'];
        return redirect()->route('Dashboard')->withCookie(cookie('jwt_token', $token, 60 * 24 * 7));
    }
}
