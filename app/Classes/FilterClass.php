<?php

namespace App\Classes;


use App\Models\Deal;
use App\Models\Location;
use App\Models\Property;
use App\Models\Type;

class FilterClass
{
    public $area, $price, $deals, $locations, $types, $bedrooms, $bathrooms, $properties;

    function __construct(){
        $this->properties = Property::all();

        $this->area = $this->getArea();
        $this->price = $this->getPrice();
        $this->bedrooms = $this->getBedrooms();
        $this->bathrooms = $this->getBathrooms();
        $this->deals = $this->getDeals();
        $this->locations = $this->getLocations();
        $this->types = $this->getTypes();
    }

    private function getArea()
    {
        return $this->geTMinMaxValues('square');
    }

    private function getPrice()
    {
        return $this->geTMinMaxValues('price');
    }

    private function getBedrooms()
    {
        return $this->geTMinMaxValues('bedrooms');
    }

    private function getBathrooms()
    {
        return $this->geTMinMaxValues('bathrooms');
    }

    private function getMinMaxValues($field)
    {
        $sortedProperties = $this->properties->sortBy($field);
        return [$sortedProperties->last()->$field, $sortedProperties->first()->$field];
    }

    private function getDeals()
    {
        return Deal::all();
    }

    private function getLocations()
    {
        return Location::all();
    }

    private function getTypes()
    {
        return Type::all();
    }
}
