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
            'title' => $this->faker->sentence(mt_rand(5, 7)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(5, 7)),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 20))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(5, 20)))
                ->map(fn($p) => "<p> $p </p>")
                ->implode(''),

        ];
    }
}
