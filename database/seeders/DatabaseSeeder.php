<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\NasabahFactory;
use Database\Factories\RekeningFactory;
use Database\Factories\TransferFactory;
use Database\Factories\TunaiFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        NasabahFactory::new()->count(10)->create();
        RekeningFactory::new()->count(10)->create();
        TransferFactory::new()->count(100)->create();
        TunaiFactory::new()->count(100)->create();
        $this->call(RekeningSeeder::class);
        $this->call(NasabahSeeder::class);
        $this->call(CreateUsersSeeder::class);
        $this->call(ConfigAdminSeeder::class);
    }
}
