<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function artwork()
    {
        return $this->belongsTo('App\Artwork');
    }

    public function emotions() {
        return $this->belongsToMany('App\Emotion')->withTimestamps();
    }
}
