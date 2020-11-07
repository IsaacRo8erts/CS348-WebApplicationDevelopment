<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
        return $this->belongTo('App\Models\Post');
    }
}
