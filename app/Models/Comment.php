<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }

    public function getAvatarAttribute($value)
    {
        if(!$value)
            return null;

        return asset('img/avatars') . '/' . $value;
    }
}
