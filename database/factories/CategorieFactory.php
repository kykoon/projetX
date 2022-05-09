<?php

namespace Database\Factories;

use App\models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\Str;

class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Libelle' => $this->faker->sentence(2, true),
        ];
    }
}
