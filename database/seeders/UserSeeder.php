<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'tiliztiadi@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'email_verified_at' => now(),
            'is_active' => 1,
            'avatar' => 'img/avatar/avatar-1.png',
        ]);
    }
}
