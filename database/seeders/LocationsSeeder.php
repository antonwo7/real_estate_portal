<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cataluna = Location::create(['parent_id' => null, 'title' => 'Cataluña', 'description' => '']);
        $valencia = Location::create(['parent_id' => null, 'title' => 'Valencia', 'description' => '']);
        $andalucia = Location::create(['parent_id' => null, 'title' => 'Andalucia', 'description' => '']);
        $murcia = Location::create(['parent_id' => null, 'title' => 'Murcia', 'description' => '']);

        $barcelona = Location::create(['parent_id' => $cataluna->getID(), 'title' => 'Barcelona', 'description' => '']);
        $girona = Location::create(['parent_id' => $cataluna->getID(), 'title' => 'Girona', 'description' => '']);
        $alicante = Location::create(['parent_id' => $valencia->getID(), 'title' => 'Alicante', 'description' => '']);
        $malaga = Location::create(['parent_id' => $andalucia->getID(), 'title' => 'Malaga', 'description' => '']);
        $murcia = Location::create(['parent_id' => $murcia->getID(), 'title' => 'Murcia', 'description' => '']);

        Location::create(['parent_id' => $girona->getID(), 'title' => 'Lloret de Mar', 'description' => '']);
        Location::create(['parent_id' => $girona->getID(), 'title' => 'Blanes', 'description' => '']);
        Location::create(['parent_id' => $barcelona->getID(), 'title' => 'Barcelona', 'description' => '']);

        Location::create(['parent_id' => $alicante->getID(), 'title' => 'Alicante', 'description' => '']);
        Location::create(['parent_id' => $alicante->getID(), 'title' => 'Torrevieja', 'description' => '']);

        Location::create(['parent_id' => $malaga->getID(), 'title' => 'Malaga', 'description' => '']);
        Location::create(['parent_id' => $murcia->getID(), 'title' => 'Murcia', 'description' => '']);
    }
}
