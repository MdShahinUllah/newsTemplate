<?php

namespace Database\Factories;

use App\Models\sport;
use Illuminate\Database\Eloquent\Factories\Factory;

class SportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = sport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'header'=>$this->faker->realText('10'),
            'description'=>$this->faker->paragraph('5'),
            'photo'=>$this->faker->imageUrl(),
        ];
    }
}
