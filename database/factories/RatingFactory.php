<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Rating; // Add the Rating model namespace
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => Book::pluck('id')->random(),
            'rating' => random_int(1, 10),
        ];
    }
}
