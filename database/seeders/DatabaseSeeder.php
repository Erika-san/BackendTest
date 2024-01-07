<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Rating;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Author::factory(1000)->create();
        Category::factory(3000)->create();

        $this->seedBooksAndRatings(100, 500);
        // $this->seedBooksAndRatings(1000, 5000);
        // $this->seedBooksAndRatings(100000, 500000);
    }

    /**
     * Seed books and ratings in chunks.
     *
     * @param int $bookCount
     * @param int $ratingCount
     */
    private function seedBooksAndRatings(int $bookCount, int $ratingCount): void
    {
        // Seed books in chunks
        Book::factory()->count($bookCount)->create();

        // Seed ratings in chunks
        Rating::factory()->count($ratingCount)->create();
    }
}
