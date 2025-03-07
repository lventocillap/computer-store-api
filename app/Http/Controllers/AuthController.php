<?php

namespace App\Http\Controllers;

use App\Exceptions\Auth\CredentialInvalid;
use App\Exceptions\Auth\UserNotFound;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            throw new UserNotFound;
        }
        if (!Hash::check($request->password, $user->password)) {
            throw new CredentialInvalid;
        }
        $token = $user->createToken('auth_token')->plainTextToken;
        //$cookie = Cookie::make('auth', $token, 60);
        return response()->json(['token' => $token]);
    }
    public function verification(): bool
    {
        return true;
    }
    public function getUser(): JsonResponse
    {
        $user = User::with('profile')->where('id', Auth::user()->id)->first();
        return new JsonResponse(['data' => $user]);
    }

    public function logout(Request $request)
    {
        $token = $request->header('Authorization');
        PersonalAccessToken::findToken($token)->delete();
        return new JsonResponse(['data' => 'logout']);
    }
}
