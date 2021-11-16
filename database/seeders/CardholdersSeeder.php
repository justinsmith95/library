<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardholdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cardholder::factory(10)->create();
    }
}
