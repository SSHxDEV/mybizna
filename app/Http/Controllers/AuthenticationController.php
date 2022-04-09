<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthenticationController extends Controller
{
    //this method adds new users
    public function register(Request $request)
    {
        $attr = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users,email',
                'password' => 'required|string|min:6|confirmed'
            ]
        );

        $user = User::create(
            [
                'name' => $attr['name'],
                'password' => \bcrypt($attr['password']),
                'email' => $attr['email']
            ]
        );

        return $this->success(
            [
                'token' => $user->createToken('tokens')->plainTextToken
            ]
        );
    }
    //use this method to signin users
    public function login(Request $request)
    {
        $attr = $request->validate(
            [
                'email' => 'required|string|email|',
                'password' => 'required|string|min:6'
            ]
        );

        if (!Auth::attempt($attr)) {
            return $this->error('Credentials not match', 401);
        }

        return $this->success(
            [
                'token' => auth()->user()->createToken('API Token')->plainTextToken
            ]
        );
    }

    // this method signs out users by removing tokens
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}
