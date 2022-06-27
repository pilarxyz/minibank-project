<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekening>
 */
class NasabahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'address' => $this->faker->address,
            'gender' => $this->faker->randomElement(['Pria', 'Wanita']),
            'phone' => $this->faker->numerify('08##########'),
            'nik' => $this->faker->nik(),
            'born_place' => $this->faker->city(),
            'born_date' => $this->faker->dateTimeBetween('-60 years', '-18 years'),
            'job' => $this->faker->jobTitle,
            

        ];
    }
}
