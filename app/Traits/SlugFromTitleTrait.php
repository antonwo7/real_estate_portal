<?php

namespace App\Traits;


use Cviebrock\EloquentSluggable\Sluggable;

trait SlugFromTitleTrait
{
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
