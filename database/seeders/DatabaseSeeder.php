<?php

namespace Database\Seeders;

use App\Models\Comments;
use App\Models\Note;
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
        User::firstOrCreate(
            [
                'id' => 1,
            ],
            [
                'email' => 'test@example.com',
                'name' => 'Test User',
                'password' => bcrypt('pass123'),
            ]
        );

        Note::factory(20)->create();

        Comments::factory(2)->create();
    }
}
