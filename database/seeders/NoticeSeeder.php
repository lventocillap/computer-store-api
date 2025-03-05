<?php

namespace Database\Seeders;

use App\Enums\NoticeEnum;
use App\Models\Promotion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(NoticeEnum::cases() as $notice){
            $notice = Promotion::create([
                'url' => $notice->imageUrl(),
                'title' => $notice->value,
                'description' => $notice->description()
            ]);
        }
    }
}
