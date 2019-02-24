<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function customers()
    {
        return $this->belongsToMany('App\Customer')->using('App\BookCustomer');
    }
    public function authors()
    {
        return $this->belongsToMany('App\Author')->using('App\AuthorBook');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category')->using('App\BookCategory');
    }
    public function creators()
    {
        return $this->belongsToMany('App\Creator')->using('App\BookCreator');
    }
    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }

}
