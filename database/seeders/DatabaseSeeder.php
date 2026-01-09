<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'username' => 'test-user',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'Posts Creator',
            'username' => 'posts-creator',
            'email' => 'creator@example.com',
        ]);

        $categories = [
            'Technology',
            'Music',
            'Science',
            'Art',
            'Psychology',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
        Post::factory(20)->create();
    }
}
