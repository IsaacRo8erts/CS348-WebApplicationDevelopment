<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'post_id',
        'comment',
    ];

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');

    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');

    }

    public function post() 
    {
        return $this->belongsTo('App\Models\Post');
        
    }

    
}
