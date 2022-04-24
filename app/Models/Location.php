<?php

namespace App\Models;

use App\Traits\SlugFromTitleTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    use SlugFromTitleTrait;

    protected $guarded = [];

    public function getID()
    {
        return $this->id;
    }

    public function getPropertiesCount()
    {
        return count($this->properties);
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_locations', 'location_id', 'property_id');
    }
}
