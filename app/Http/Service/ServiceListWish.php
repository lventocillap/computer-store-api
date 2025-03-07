<?php

declare(strict_types=1);

namespace App\Http\Service;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

trait ServiceListWish
{
    public function listWish(): array
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
        return [
            'duplicated_products' => $duplicatedProductsInfo->values()->toArray(),
            'total_amount' => round($totalAmount, 2)
        ];
    }
}