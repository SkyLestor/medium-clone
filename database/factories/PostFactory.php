<?php

namespace Database\Factories;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();
        return [
            'image' => $this->faker->imageUrl(),
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph(5),
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => 2,
            'published_at' => $this->faker->dateTime(),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Post $post) {
            $path = public_path('/post_default.png');

            if (file_exists($path)) {
                $post->addMedia($path)->preservingOriginal()->toMediaCollection();
            }
        });
    }

}
