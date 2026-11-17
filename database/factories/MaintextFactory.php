<?php

namespace Database\Factories;

use App\Models\Maintext;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MaintextFactory extends Factory
{
    protected $model = Maintext::class;

    public function definition(): array
    {
        $title = fake()->unique()->words(2, true);
        return ['url' => Str::slug($title), 'title' => ucfirst($title), 'body' => '<p>'.e(fake()->paragraph()).'</p>'];
    }
}
