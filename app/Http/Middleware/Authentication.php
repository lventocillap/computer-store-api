<?php

namespace App\Http\Middleware;

use App\Exceptions\Auth\TokenExpired;
use App\Exceptions\Auth\TokenNotFound;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class Authentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->cookie('auth');
        if(!$token){
            throw new TokenNotFound;
        }
        $validateToken = PersonalAccessToken::findToken($token);
        
        if(!$validateToken){
            throw new TokenExpired;
        }
        $user = User::find($validateToken->tokenable_id);
        Auth::login($user);
        return $next($request);
    }
}
