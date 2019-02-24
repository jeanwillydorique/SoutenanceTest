<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    public function creators()
    {
        return $this->belongsToMany('App\Creator')->using('App\CreatorGame');
    }
    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }
}
