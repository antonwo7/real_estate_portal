<?php

namespace App\Models;

use App\Traits\SlugFromTitleTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    use SlugFromTitleTrait;

    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
