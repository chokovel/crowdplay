<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

         $user = User::firstOrCreate([
        'email' => 'admin@gmail.com'
        ], [
            'name' => 'Admin',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);
    }
}
