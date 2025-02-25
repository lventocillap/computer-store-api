<?php

namespace App\Http\Controllers;

use App\Exceptions\Product\NotFoundCategory;
use App\Exceptions\Product\NotFoundProduct;
use App\Http\Controllers\Controller;

use App\Http\Resources\ProductCategoryResource;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getCategoryProducts(string $idCategory): JsonResponse
    {
        if(!Category::find($idCategory)){
            throw new NotFoundCategory;
        }
        $products = Category::with('product.image')->where('id', $idCategory)->get();
        return new JsonResponse(['data' => ProductCategoryResource::collection($products)]);
    }
    public function getProductId(int $productId): JsonResponse
    {
        $product = Product::find($productId);
        if(!$product){
            throw new NotFoundProduct;
        }
        return new JsonResponse(['data' => new ProductResource($product)]);
    }
}
