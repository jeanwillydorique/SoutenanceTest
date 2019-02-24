<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function books()
    {
        return $this->belongsToMany('App\Book')->using('App\BookCustomer');
    }
    public function games()
    {
        return $this->belongsToMany('App\Game')->using('App\CustomerGames');
    }

}
