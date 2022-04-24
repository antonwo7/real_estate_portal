<?php

namespace App\Models;

use App\Traits\SlugFromTitleTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    use SlugFromTitleTrait;

    protected $guarded = [];

    protected function getImagesAttribute($value)
    {
        return unserialize($value);
    }

    public function agent()
    {
        return $this->hasOne(User::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class, 'property_locations', 'property_id', 'location_id');
    }

    public function types()
    {
        return $this->belongsToMany(Type::class, 'property_types', 'property_id', 'type_id');
    }

    public function deals()
    {
        return $this->belongsToMany(Deal::class);
    }
}
