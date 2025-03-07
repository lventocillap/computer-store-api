<?php

declare(strict_types=1);

namespace App\Http\Service;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait TrashListWish
{
    public function trashListWish()
    {
        $user = User::find(Auth::id());
        $user->wishlist()->detach();
    }
}