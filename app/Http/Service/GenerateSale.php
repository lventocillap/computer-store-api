<?php

declare(strict_types=1);

namespace App\Http\Service;

use App\Exceptions\Product\NotListProductWish;
use App\Models\DetailSale;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

trait GenerateSale
{
    use ServiceDuplicate;

    public function generateSale(): array
    {
        $data = $this->duplicateIdProduct();

        $total = 0;
        foreach ($data['product_id'] as $productId) {
            $product = Product::find($productId);
            $total += $product->price * $data['product_count'][$productId];
        }
        if($total === 0){
            throw new NotListProductWish;
        }
        $saleId = Sale::create([
            'user_id' => Auth::id(),
            'price_total' => $total,
            'date' => now()
        ]);
        
        foreach ($data['product_id'] as $productId) {
            $product = Product::find($productId);
            
            DetailSale::create([
                'product_id' => $productId,
                'sale_id' => $saleId->id,
                'price' => $product->price,
                'amount' => $data['product_count'][$productId]
            ]);
            
            if ($product) {
                $product->update([
                    'stock' => $product->stock - $data['product_count'][$productId] // Accede usando la clave correcta
                ]);
            }
        }
        return ['data' => 'register'];
    }
}