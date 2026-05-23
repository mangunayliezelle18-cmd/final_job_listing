<?php

namespace Database\Factories;

use App\Models\ListJobs;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListJobsFactory extends Factory
{
    protected $model = ListJobs::class;

    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->realText(200),
            'company' => fake()->company(),
            'location' => fake()->city(),
            'salary' => fake()->randomFloat(2, 50000, 150000),
        ];
    }
}