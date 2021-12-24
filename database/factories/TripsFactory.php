<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TripsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name'=> $this->faker->colorName(),
           'description'=> $this->faker->sentence(5),
           'max_visitors'=> $this->faker->numerify('##'),
           'date'=> $this->faker->numerify('##-##-####'),
           'guide_id'=> $this->faker->numerify('##'),
           

        ];
    }
}
