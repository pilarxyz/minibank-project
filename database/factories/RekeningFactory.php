<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekening>
 */
class RekeningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nasabah_id' => $this->faker->numberBetween(1, 10),
            'no_rekening' => $this->faker->bankAccountNumber,
            'jenis_rekening' => $this->faker->randomElement(['Tabungan', 'Deposito']),
            'saldo' => $this->faker->randomFloat(2, 0, 1000000),
            //
        ];
    }
}
