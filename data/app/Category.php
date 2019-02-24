<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //return $this->hasMany('App\Comment');

    public function books()
    {
        return $this->belongsToMany('App\Book')->using('App\BookCategory');
    }
}
