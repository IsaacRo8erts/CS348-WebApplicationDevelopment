<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'title',
        'content',
        //'comment',
    ];

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');

    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
