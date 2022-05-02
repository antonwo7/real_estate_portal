<?php

namespace App\Models;

use App\Traits\PageMetaTrait;
use App\Traits\SlugFromTitleTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, SlugFromTitleTrait, PageMetaTrait;
}
