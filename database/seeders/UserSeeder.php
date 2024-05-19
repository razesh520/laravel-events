<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rajesh Chaudhary',
            'email' => 'chaudharyrajesh520@gmail.com',
            'password' => 12345678,
        ]);
    }
}
