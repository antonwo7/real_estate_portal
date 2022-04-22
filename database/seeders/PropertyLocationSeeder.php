<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyLocation;
use Illuminate\Database\Seeder;

class PropertyLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $communidades = Location::where('parent_id', null);
        $properties = Property::all();

        foreach($properties as $property){
            $property_id = $property->id;
            $communidad_id = $communidades->get()->random(1)->pluck('id')->first();
            $provincia_id = Location::where('parent_id', $communidad_id)->get()->random(1)->pluck('id')->first();
            $city_id = Location::where('parent_id', $provincia_id)->get()->random(1)->pluck('id')->first();

            PropertyLocation::create(['property_id' => $property_id, 'location_id' => $communidad_id]);
            PropertyLocation::create(['property_id' => $property_id, 'location_id' => $provincia_id]);
            PropertyLocation::create(['property_id' => $property_id, 'location_id' => $city_id]);
        }
    }
}
