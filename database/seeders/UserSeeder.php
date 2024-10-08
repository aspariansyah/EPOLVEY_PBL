<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([

            [
                'name' => 'Neny',
                'email' => 'neny@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'), // Hash password untuk admin
                'remember_token' => Str::random(10),
                'photo' => null, // Tambahkan jika Anda memiliki foto
                'role' => 'Admin', // Peran admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dosen 1',
                'email' => 'dosen@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('dosen123'), // Hash password untuk dosen
                'remember_token' => Str::random(10),
                'photo' => null, // Tambahkan jika Anda memiliki foto
                'role' => 'Dosen', // Peran dosen
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
