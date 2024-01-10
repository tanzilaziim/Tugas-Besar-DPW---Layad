<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\role_id;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Kemahasiswaan ITTP',
            'role_id' => 1,
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('admin123')
        ]);
        role_id::create([
           'name' => 'admin', 
        ]);
        role_id::create([
           'name' => 'user', 
        ]);
    }
}
