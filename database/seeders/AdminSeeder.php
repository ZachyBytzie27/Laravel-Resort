<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\crud;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        crud::create([
            'fullname' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123'),
            'role' => 'admin',
        ]);
    }
}
