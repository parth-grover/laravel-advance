<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected  $guarded = [];

    public function posts(){
        return $this->morphedByMany(post::class, 'taggable' );
    }

    public function video(){
        return $this->morphedByMany(video::class , 'taggable');
    }
}
