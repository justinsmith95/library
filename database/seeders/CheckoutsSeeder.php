<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CheckoutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Checkout::factory(10)->create();
    }
}
