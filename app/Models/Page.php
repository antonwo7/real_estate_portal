<?php

namespace App\Models;

use App\Traits\SlugFromTitleTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, SlugFromTitleTrait;

    public function page_meta()
    {
        return $this->hasMany(PageMeta::class);
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
