<?php

namespace Database\Factories;

use App\Models\business;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = business::class;

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
