<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function getImagesAttribute($value)
    {
        return unserialize($value);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class, 'properties_locations', 'property_id', 'location_id');
    }
}
