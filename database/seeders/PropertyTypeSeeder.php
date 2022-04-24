<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\PropertyType;
use App\Models\Type;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = Type::where('parent_id', null);
        $properties = Property::all();

        foreach($properties as $property){
            $property_id = $property->id;

            $type_id = $types->get()->random(1)->pluck('id')->first();
            $subtype_id = Type::where('parent_id', $type_id)->get()->random(1)->pluck('id')->first();

            $subsubtype_id = null;
            $subsubtypes = Type::where('parent_id', $subtype_id)->get();

            if($subsubtypes->count() > 0){
                $subsubtype_id = $subsubtypes->random(1)->pluck('id')->first();
            }

            PropertyType::create(['property_id' => $property_id, 'type_id' => $type_id]);
            PropertyType::create(['property_id' => $property_id, 'type_id' => $subtype_id]);

            if($subsubtype_id)
                PropertyType::create(['property_id' => $property_id, 'type_id' => $subsubtype_id]);
        }
    }
}
