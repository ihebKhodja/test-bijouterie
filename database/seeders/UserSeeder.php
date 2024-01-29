<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         
         $user_admin= User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' =>bcrypt('admin'),
            'is_admin'=>true,
        ]);
        $user= User::create([
           'name' => 'user',
            'email' => 'user@example.com',
            'password' =>bcrypt('user'),
        ]);
        $user_admin->save();
        $user->save();
        $user_admin->assignRole('admin');
        $user->assignRole('operateur');

         
    }
}
