<?php

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\City::class)->create([
            'name' => 'Medellin',
            'state_id' => \App\Entities\State::latest()->first()
        ]);
    }
}
