<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin AJ',
            'email' => 'admin@aj.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);
        
        User::create([
            'name' => 'Karyawan AJ',
            'email' => 'karyawan@aj.com',
            'password' => Hash::make('karyawan123'),
            'role' => 'karyawan'
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
