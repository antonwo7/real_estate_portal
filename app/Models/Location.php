<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getID(){
        return $this->id;
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'properties_locations', 'property_id', 'location_id');
    }
}
