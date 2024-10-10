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
                'name' => '3202216125',
                'email' => 'mhs@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('mhs123'), // Hash password untuk dosen
                'remember_token' => Str::random(10),
                'photo' => null, // Tambahkan jika Anda memiliki foto
                'role' => 'Dosen', // Peran dosen
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
