<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Models\Book; // Add the Book model namespace
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), // Use $this->faker instead of fake()->name()
            'author_id' => Author::pluck('id')->random(),
            'category_id' => Category::pluck('id')->random(),
        ];
    }
}
