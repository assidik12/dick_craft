<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{

    protected function generateTokenWithRole($credentials){


        if (!$token = JWTAuth::attempt($credentials)) {
            return false;
        }

        return $token;
    }


    protected function respondWithToken($token)  {
        $expirationTime = config('auth.expiration') * 60; // Get token expiration time in seconds
        return response()->json([
                    'access_token' => $token,
                    'token_type' => 'bearer',
                    'expires_in' => $expirationTime
                ]);
    }



    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    // controller request json
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation failed'], 400);
        }

        if (User::where('email', $request->email)->exists()) {
            return response()->json(['message' => 'Email already exists'], 400);
        }



        // insert product melalui model
        User::create($request->all());

        // Lakukan proses lainnya sesuai kebutuhan
        return response()->json([
            'message' => 'Data received successfully',
            'received_data' => "success"
        ], 200);
    }

    public function login(Request $request)  {
        $validator = Validator::make($request->all(),
        [
            'email'=> 'required|email',
            'password' => 'required|string|min:6',
        ]
    );
    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    }

    $credentials = $request->only('email', 'password');

    if (!($token = $this->generateTokenWithRole($credentials))) {
        return response()->json(
            [
                'success' => false,
                'message' => 'Email atau Password Anda salah',
            ],
            401,
        );
    }

        return $this->respondWithToken($token);

    }
}
