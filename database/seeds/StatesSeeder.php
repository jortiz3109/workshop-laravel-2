<?php

use App\Entities\Country;
use App\Entities\State;
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
        factory(State::class)->create([
            'name' => 'Antioquia',
            'country_id' => Country::latest()->first()
        ]);
    }
}
