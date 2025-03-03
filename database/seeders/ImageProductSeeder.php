<?php

namespace Database\Seeders;

use App\Enums\ProductEnum;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ImageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(ProductEnum::cases() as $product){
            Image::create([
                'imageble_type' => Product::class,
                'imageble_id' => 2,
                'url' => $product->imgageUrl()
            ]);
        }
    }
}
