<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tunai>
 */
class TunaiFactory extends Factory
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
            'jenis_transaksi' => $this->faker->randomElement(['Setor Tunai', 'Tarik Tunai']),
            'jumlah' => $this->faker->randomFloat(2, 0, 1000000),
            //
        ];
    }
}
