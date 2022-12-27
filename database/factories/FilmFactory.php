<?php

namespace Database\Factories;

use App\Models\Reditelj;
use App\Models\User;
use App\Models\Zanr;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->word(),
            'godina_izdanja'=> $this->faker->year(),
            'opis' => $this->faker->unique()->sentence(),
            'user_id' => User::factory(),
            'zanr_id'=> Zanr::factory(),
            'reditelj_id'=> Reditelj::factory()
        ];
    }
}
