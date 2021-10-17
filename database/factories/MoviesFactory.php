<?php

namespace Database\Factories;

use App\Models\Movies;
use Illuminate\Database\Eloquent\Factories\Factory;

class MoviesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         $cId = rand(1, 15);
        return [
            'title'=>$this->faker->title(),
            'score' => $this->faker->unique()->numberBetween(1, 20)
,
        ];
    }
}