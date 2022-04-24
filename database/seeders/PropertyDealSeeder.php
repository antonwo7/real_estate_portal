<?php

namespace Database\Seeders;

use App\Models\Deal;
use App\Models\Property;
use App\Models\PropertyDeal;
use Illuminate\Database\Seeder;

class PropertyDealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = Property::all();

        foreach($properties as $property){
            $property_id = $property->id;
            $deal_id = Deal::all()->random(1)->pluck('id')->first();
            PropertyDeal::create(['property_id' => $property_id, 'deal_id' => $deal_id]);
        }
    }
}
