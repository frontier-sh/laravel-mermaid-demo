<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(4)->create();

        Post::factory(20)->create([
            'user_id' => function() use($users) {
                return $users->random();
            }
        ]);
    }
}
