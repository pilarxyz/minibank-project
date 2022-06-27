<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transfer>
 */
class TransferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'pengirim_id' => $this->faker->numberBetween(1, 10),
            'penerima_id' => $this->faker->numberBetween(1, 10),
            'jumlah' => $this->faker->randomFloat(2, 0, 1000000),
        ];
    }
}
