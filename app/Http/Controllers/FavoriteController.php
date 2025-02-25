<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\FavoriteResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favoriteProducts()
    {
        // dd(Auth::user());
        $favorites = User::with('products')->where('id',Auth::user()->id)->get();
        return new JsonResponse(['data'=> FavoriteResource::collection($favorites)]);
    }
}
