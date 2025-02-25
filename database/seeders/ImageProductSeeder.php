<?php

namespace Database\Seeders;

use App\Enums\ImageProductEnum;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(ImageProductEnum::cases() as $product){
            Image::create([
                'imageble_type' => $product->type(),
                'imageble_id' => $product->id(),
                'url' => $product->value
            ]);
        }
    }
}
