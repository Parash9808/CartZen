<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class VendorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Fashion Vendor',
            'email' => 'fashion@cartzen.com',
            'password' => Hash::make('password'),
            'role' => 'vendor',
        ]);

        User::create([
            'name' => 'Sports Vendor',
            'email' => 'sports@cartzen.com',
            'password' => Hash::make('password'),
            'role' => 'vendor',
        ]);

        User::create([
            'name' => 'Home Vendor',
            'email' => 'home@cartzen.com',
            'password' => Hash::make('password'),
            'role' => 'vendor',
        ]);

        User::create([
            'name' => 'Books Vendor',
            'email' => 'books@cartzen.com',
            'password' => Hash::make('password'),
            'role' => 'vendor',
        ]);
    }
}
