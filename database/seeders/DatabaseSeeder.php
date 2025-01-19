<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create test user bawaan filament
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create User Admin
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        // Call Seeder
        $this->call([
            GuestBookSeeder::class,
        ]);
    }
}
