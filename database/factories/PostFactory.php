<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(4, 7)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(5, 8)),
            'body' => $this->faker->paragraph(mt_rand(5, 20)),

        ];
    }
}
