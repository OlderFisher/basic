<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
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
        $usersIds = User::query()->pluck('id')->toArray();
        $categoriesIds = Category::query()->pluck('id')->toArray();
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph,
            'category_id' => $categoriesIds[rand(0, count($categoriesIds)-1)],
            'created_by' => $usersIds[rand(0, count($usersIds)-1)],
        ];
    }
}
