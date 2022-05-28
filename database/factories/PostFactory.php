<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->words(4),
            'description' => $this->faker->text(),
            'category_id' => 1, //$this->faker->numberBetween(1, 10),
            'user_id' => 1, // $this->faker->numberBetween(1, 50)
        ];
    }
}
