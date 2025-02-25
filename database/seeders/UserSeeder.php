<?php

namespace Database\Seeders;

use App\Enums\UserEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(UserEnum::cases() as $user){
            User::factory()->create([
                'name' => $user->value,
                'email' => $user->email(),
                'password' => Hash::make($user->password())
            ]);         
        }
        
    }
}
