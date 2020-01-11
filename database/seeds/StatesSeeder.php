<?php

use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\State::class)->create([
            'name' => 'Antioquia',
            'country_id' => \App\Entities\Country::latest()->first()
        ]);
    }
}
