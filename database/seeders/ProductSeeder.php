<?php

namespace Database\Seeders;

use App\Enums\ProductEnum;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ProductEnum::cases() as $product) {
            $prod = Product::create([
                'name' => $product->value,
                'brand' => $product->brand(),
                'status' => $product->status(),
                'stock' => $product->stock(),
                'manufacturer_information_url' => $product->manufacturerInformationUrl(),
                'description' => $product->description(),
                'price' => $product->price(),
                // 'url' => $product->imgageUrl(),
                'category_id' => $product->categoryId()
            ]);

            Image::create([
                'imageble_type' => Product::class,
                'imageble_id' => $prod->id,
                'url' => $product->imgageUrl()
            ]);
        }
    }
}
