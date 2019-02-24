<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    //
    public function books()
    {
        return $this->belongsToMany('App\Book')->using('App\BookCreator');
    }
    public function games()
    {
        return $this->belongsToMany('App\Game')->using('App\CreatorGame');
    }
}
