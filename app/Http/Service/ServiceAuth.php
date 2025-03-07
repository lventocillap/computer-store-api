<?php

declare(strict_types=1);

namespace App\Http\Service;

use App\Exceptions\Auth\CredentialInvalid;
use App\Exceptions\Auth\UserNotFound;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

trait ServiceAuth
{
    public function auth(string $email, $password): string
    {
        $user = User::where('email', $email)->first();
        if (!$user) {
            throw new UserNotFound;
        }
        if (!Hash::check($password, $user->password)) {
            throw new CredentialInvalid;
        }
        $token = $user->createToken('auth_token')->plainTextToken;
        //$cookie = Cookie::make('auth', $token, 60);
        return $token;
    }
}