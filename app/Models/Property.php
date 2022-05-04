<?php

namespace App\Models;

use App\Traits\PageMetaTrait;
use App\Traits\SlugFromTitleTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory, SlugFromTitleTrait, PageMetaTrait;

    protected $guarded = [];

    public function getCreatedAtAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }

    public function getImagesAttribute($value)
    {
        $images = unserialize($value);

        if(!is_array($images)){
            return null;
        }

        return array_map(function($image){
            return asset('img/property') . '/' . $image;
        }, $images);
    }

    public function getPlanesAttribute($value)
    {
        $planes = unserialize($value);

        if(!is_array($planes)){
            return null;
        }

        return array_map(function($plan){
            return asset('img/property') . '/' . $plan;
        }, $planes);
    }

    public function getRelatedAttribute($value)
    {
        $relatedProperties = unserialize($this->related_properties);

        if(!is_array($relatedProperties)){
            return null;
        }

        return array_map(function($propertyId){
            return Property::find($propertyId);
        }, $relatedProperties);
    }

    public function getFeaturesAttribute($value)
    {
        $features = unserialize($value);

        if(!$features){
            return $features;
        }

        $itemsInColumn = (integer)ceil(count($features) / 3);

        return [
            array_slice($features, 0, $itemsInColumn),
            array_slice($features, $itemsInColumn, $itemsInColumn),
            array_slice($features, $itemsInColumn, $itemsInColumn)
        ];
    }

    public function getUrlAttribute($value)
    {
        return url('/properties') . '/' . $this->slug;
    }

    public function getTypeAttribute($value)
    {
        return 'Haza';
    }

    public function getLocationAttribute($value)
    {
        return 'Minsk';
    }

    public function agent()
    {
        return $this->belongsTo(User::class, 'user_id');
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

    public function comments()
    {
        return $this->hasMany(Comment::class)->where('moderated', true);
    }

//    public function getCommentsAttribute($comments)
//    {
//        return $comments;
//    }

}
