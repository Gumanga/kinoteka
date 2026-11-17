<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
{
    protected $model = Movie::class;

    public function definition(): array
    {
        $title = fake()->unique()->words(3, true);
        return [
            'slug' => Str::slug($title).'-'.fake()->unique()->numberBetween(1000, 9999),
            'title' => ucfirst($title),
            'original_title' => ucfirst($title),
            'year' => fake()->numberBetween(1990, 2025),
            'country' => fake()->country(),
            'director' => fake()->name(),
            'duration_min' => fake()->numberBetween(80, 190),
            'description' => fake()->paragraph(),
            'rating_avg' => fake()->randomFloat(1, 5, 9),
            'rating_count' => fake()->numberBetween(0, 200),
        ];
    }
}
