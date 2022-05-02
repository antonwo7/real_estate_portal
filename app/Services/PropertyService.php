<?php

namespace App\Services;


use App\Models\Property;

class PropertyService
{
    public function getPropertyBySlug($propertySlug)
    {
        return Property::where('slug', $propertySlug)->first();
    }
}
