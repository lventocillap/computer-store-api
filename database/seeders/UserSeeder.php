<?php

namespace Database\Seeders;

use App\Enums\UserEnum;
use App\Models\Profile;
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
            $userId = User::factory()->create([
                'name' => $user->value,
                'email' => $user->email(),
                'password' => Hash::make($user->password())
            ]);         
            Profile::create([
                'user_id' => $userId->id,
                'cellphone' => $user->cellphone(),
                'direcction' => $user->direcction(),
                'dni' => $user->dni(),
            ]);
        }
        
    }
}
