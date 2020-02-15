<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = [];

    public function image(){
        return $this->morphone(Image::class,'imageable');
    }

    public function comments(){
        return $this->morphMany(comments::class,'commentable');
    }

    public function tags(){
        return $this->morphToMany(tag::class,'taggable');
    }
}
