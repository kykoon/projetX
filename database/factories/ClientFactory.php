<?php

namespace Database\Factories;

use App\models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom' => $this->faker->sentence(2, true),
            'Prenom' => $this->faker->sentence(3, true),
            'DateNaissance' => $this->faker->date($format = 'Y-m-d'),
        ];
    }
}
