<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RekeningSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // sql file get contens
        $sql = file_get_contents(__DIR__ . '/../sql/rekening.sql');
        DB::unprepared($sql);
    }
}