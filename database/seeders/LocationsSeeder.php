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
        $cataluna = Location::create(['parent_id' => null, 'title' => 'Cataluña', 'description' => '', 'image' => 'locations/1.jpg']);
        $valencia = Location::create(['parent_id' => null, 'title' => 'Valencia', 'description' => '', 'image' => 'locations/1.jpg']);
        $andalucia = Location::create(['parent_id' => null, 'title' => 'Andalucia', 'description' => '', 'image' => 'locations/1.jpg']);
        $murcia = Location::create(['parent_id' => null, 'title' => 'Murcia', 'description' => '', 'image' => 'locations/1.jpg']);

        $barcelona = Location::create(['parent_id' => $cataluna->getID(), 'title' => 'Barcelona', 'description' => '', 'image' => 'locations/1.jpg']);
        $girona = Location::create(['parent_id' => $cataluna->getID(), 'title' => 'Girona', 'description' => '', 'image' => 'locations/1.jpg']);
        $alicante = Location::create(['parent_id' => $valencia->getID(), 'title' => 'Alicante', 'description' => '', 'image' => 'locations/1.jpg']);
        $malaga = Location::create(['parent_id' => $andalucia->getID(), 'title' => 'Malaga', 'description' => '', 'image' => 'locations/1.jpg']);
        $murcia = Location::create(['parent_id' => $murcia->getID(), 'title' => 'Murcia', 'description' => '', 'image' => 'locations/1.jpg']);

        Location::create(['parent_id' => $girona->getID(), 'title' => 'Lloret de Mar', 'description' => '', 'image' => 'locations/1.jpg']);
        Location::create(['parent_id' => $girona->getID(), 'title' => 'Blanes', 'description' => '', 'image' => 'locations/1.jpg']);
        Location::create(['parent_id' => $barcelona->getID(), 'title' => 'Barcelona', 'description' => '', 'image' => 'locations/1.jpg']);

        Location::create(['parent_id' => $alicante->getID(), 'title' => 'Alicante', 'description' => '', 'image' => 'locations/1.jpg']);
        Location::create(['parent_id' => $alicante->getID(), 'title' => 'Torrevieja', 'description' => '', 'image' => 'locations/1.jpg']);

        Location::create(['parent_id' => $malaga->getID(), 'title' => 'Malaga', 'description' => '', 'image' => 'locations/1.jpg']);
        Location::create(['parent_id' => $murcia->getID(), 'title' => 'Murcia', 'description' => '', 'image' => 'locations/1.jpg']);
    }
}
