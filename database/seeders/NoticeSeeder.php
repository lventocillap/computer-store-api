<?php

namespace Database\Seeders;

use App\Enums\NoticeEnum;
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
            
        }
    }
}
