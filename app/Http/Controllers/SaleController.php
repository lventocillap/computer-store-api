<?php

namespace App\Http\Controllers;

use App\Exceptions\Product\LimitedStock;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function storeWishlist(int $idProduct): JsonResponse
    {
        $productsRelashion = Wishlist::where('product_id', $idProduct)->where('user_id', Auth::user()->id)->count();
        $productStock = Product::find($idProduct)->stock;
        if($productsRelashion >= $productStock){
            throw new LimitedStock;
        }
        Wishlist::create([
            'user_id' => Auth::user()->id,
            'product_id' => $idProduct
        ]);
        return new JsonResponse(['data' => 'register wishlist']);
    }

    public function listWishlist(): JsonResponse
    {
        $wishlist = Wishlist::with('product')->where('user_id', Auth::user()->id)->get();
        $amount = 0;
        foreach($wishlist as $wish){
            $amount += $wish->product->price;
        }
        return new JsonResponse(['data' => $wishlist, 'amount' => round($amount, 2)]);
    }

    
}
