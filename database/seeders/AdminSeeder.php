<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Crud;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Crud::create([
            'fullname' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123'),
            'role' => 'admin',
        ]);
    }
}
