<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commercial = Type::create(['parent_id' => null, 'title' => 'Commercial', 'description' => '']);
        $residential = Type::create(['parent_id' => null, 'title' => 'Residential', 'description' => '']);

        $office = Type::create(['parent_id' => $commercial->getID(), 'title' => 'Office', 'description' => '']);
        $hotel = Type::create(['parent_id' => $commercial->getID(), 'title' => 'Hotel', 'description' => '']);
        $building = Type::create(['parent_id' => $commercial->getID(), 'title' => 'Building', 'description' => '']);

        $house = Type::create(['parent_id' => $residential->getID(), 'title' => 'House', 'description' => '']);
        $apartment = Type::create(['parent_id' => $residential->getID(), 'title' => 'Apartment', 'description' => '']);
        $land = Type::create(['parent_id' => $residential->getID(), 'title' => 'Land', 'description' => '']);

        Type::create(['parent_id' => $house->getID(), 'title' => 'Townhouse', 'description' => '']);
        Type::create(['parent_id' => $house->getID(), 'title' => 'Single house', 'description' => '']);
        Type::create(['parent_id' => $house->getID(), 'title' => 'Bungalow', 'description' => '']);

        Type::create(['parent_id' => $apartment->getID(), 'title' => 'Duplex', 'description' => '']);
        Type::create(['parent_id' => $apartment->getID(), 'title' => 'Penthouse', 'description' => '']);
        Type::create(['parent_id' => $apartment->getID(), 'title' => 'Flat', 'description' => '']);
        Type::create(['parent_id' => $apartment->getID(), 'title' => 'Studio', 'description' => '']);
    }
}
