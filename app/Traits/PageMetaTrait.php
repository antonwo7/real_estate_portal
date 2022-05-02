<?php

namespace App\Traits;


use App\Models\PageMeta;

trait PageMetaTrait
{
    public function page_meta()
    {
        return $this->hasMany(PageMeta::class, 'page_id');
    }

    public function getPageMeta()
    {
        $page_meta = [];

        foreach ($this->page_meta->pluck('value', 'slug')->all() as $key => $value){
            $page_meta[$key] = $value;
        }

        return $page_meta;
    }
}
