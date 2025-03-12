<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->admin()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        User::factory()
            ->employee()
            ->create([
                'name' => 'Employee User',
                'email' => 'employee@example.com',
                'password' => Hash::make('password'),
            ]);

        User::factory()
            ->hr()
            ->create([
                'name' => 'HR User',
                'email' => 'hr@example.com',
                'password' => Hash::make('password'),
            ]);

        User::factory()
            ->create([
                'name' => 'Multi Role User',
                'email' => 'multi@example.com',
                'password' => Hash::make('password'),
                'roles' => UserRole::cases()
            ]);
    }
}
