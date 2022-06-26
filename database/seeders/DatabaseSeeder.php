<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create a test account
        User::factory()->create([
            'name' => 'Test Account',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Seed the database with default values
        $this->call([
            UserLevelSeeder::class,
            ForgeLevelSeeder::class,
            OreSeeder::class,
            ItemSeeder::class,
            GemSeeder::class,
        ]);
    }
}
