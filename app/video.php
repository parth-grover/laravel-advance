<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected  $guarded = [];

    public function comments(){
        return $this->morphMany(comments::class , 'commentable');
    }

    public  function tags(){
        return $this->morphToMany(tag::class ,'taggable');
    }
}
