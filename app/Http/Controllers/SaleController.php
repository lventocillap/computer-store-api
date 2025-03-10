<?php

namespace App\Http\Controllers;

use App\Exceptions\Product\LimitedStock;
use App\Http\Controllers\Controller;
use App\Http\Service\ServiceDuplicate;
use App\Models\DetailSale;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Wishlist;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    use ServiceDuplicate;
    public function storeWishlist(int $idProduct): JsonResponse
    {
        $productsRelashion = Wishlist::with('product.image')->where('product_id', $idProduct)->where('user_id', Auth::user()->id)->count();
        $productStock = Product::find($idProduct)->stock;
        if ($productsRelashion >= $productStock) {
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
        $wishlist = Wishlist::with('product.image') // Cargar la relación polimórfica de imagen
            ->where('user_id', Auth::id())
            ->get();

        // Agrupar por product_id
        $groupedWishlist = $wishlist->groupBy('product_id');

        // Obtener los IDs de los productos duplicados
        $duplicatedProductIds = $groupedWishlist->filter(function ($items) {
            return $items->count() > 0; // Filtra los productos que aparecen más de una vez
        })->keys()->toArray(); // Obtiene solo los IDs de los productos duplicados

        // Obtener los campos requeridos y la imagen de los productos duplicados
        $duplicatedProductsInfo = Product::with('image') // Cargar la relación polimórfica de imagen
            ->whereIn('id', $duplicatedProductIds)
            ->get([
                'id',
                'name',
                'brand',
                'status',
                'stock',
                'manufacturer_information_url',
                'description',
                'price',
            ])
            ->map(function ($product) use ($groupedWishlist) {
                // Obtener la cantidad de registros duplicados para este producto
                $duplicateCount = $groupedWishlist->get($product->id)->count();

                // Calcular el precio total para este producto
                $totalPrice = $product->price * $duplicateCount;

                // Obtener la imagen del producto (manejar caso nulo)
                $image = $product->image ? [
                    'id' => $product->image->id,
                    'url' => $product->image->url, // Ajusta este campo según tu estructura de imágenes
                ] : null; // Si no hay imagen, devolver null

                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'brand' => $product->brand,
                    'status' => $product->status,
                    'stock' => $product->stock,
                    'manufacturer_information_url' => $product->manufacturer_information_url,
                    'description' => $product->description,
                    'price' => $product->price,
                    'duplicate_count' => $duplicateCount, // Cantidad de registros duplicados
                    'total_price' => round($totalPrice, 2), // Precio total para este producto
                    'image' => $image, // Imagen del producto (puede ser null)
                ];
            });

        // Calcular el monto total de todos los productos duplicados
        $totalAmount = $duplicatedProductsInfo->sum('total_price');

        // Retornar la información de los productos duplicados y el monto total
        return new JsonResponse([
            'duplicated_products' => $duplicatedProductsInfo->values()->toArray(),
            'total_amount' => round($totalAmount, 2) // Monto total de todos los productos duplicados
        ]);
    }

    public function saleGenerate()
    {
        $data = $this->duplicateIdProduct();

        $total = 0;
        foreach ($data['product_id'] as $productId) {
            $product = Product::find($productId);
            $total += $product->price * $data['product_count'][$productId];
        }

        $saleId = Sale::create([
            'user_id' => Auth::id(),
            'amount' => $total,
            'date' => now()
        ]);
        
        foreach ($data['product_id'] as $productId) {
            $product = Product::find($productId);
            
            DetailSale::create([
                'product_id' => $productId,
                'sale_id' => $saleId->id,
                'price' => $product->price
            ]);
            
            if ($product) {
                $product->update([
                    'stock' => $product->stock - $data['product_count'][$productId] // Accede usando la clave correcta
                ]);
            }
        }
        return new JsonResponse(['data' => 'register']);
    }
}
