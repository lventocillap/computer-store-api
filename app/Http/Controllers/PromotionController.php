<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function getPromotions(): JsonResponse
    {
        $promotions = Promotion::all();
        return new JsonResponse(['data' => $promotions]);
    }
}
