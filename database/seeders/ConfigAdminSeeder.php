<?php

namespace Database\Seeders;

use App\Models\ConfigAdmin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ConfigAdmin::firstOrCreate([
            'name' => 'Bank Mini',
            'address' => 'Jl. Soekarno Hatta No.1',
            'email' => 'mycall@bankmini.com',
            'contact' => '088112099660',
            'logo' => 'Logo.png'
        ]);
    }
}
