<?php

namespace Database\Factories;

use App\Models\posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'subtitle' => $this->faker->sentence(3),
            'contents' => $this->faker->sentence(20),
            'comments' => $this->faker->sentence(10),
            
        ];
    }
}
