<?php

namespace Database\Factories;

use App\Models\technology;
use Illuminate\Database\Eloquent\Factories\Factory;

class TechnologyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = technology::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'header'=>$this->faker->realText('10'),
            'description'=>$this->faker->paragraph('3'),
            'photo'=>$this->faker->imageUrl(),
        ];
    }
}
