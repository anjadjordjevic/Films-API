<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RediteljFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime'=>$this->faker->firstName(),
            'prezime'=>$this->faker->lastName(),
            'datum_rodjenja'=>$this->faker->date(),
            'pol'=>$this->faker->randomElement(['muski','zenski']),
        ];
    }
}
