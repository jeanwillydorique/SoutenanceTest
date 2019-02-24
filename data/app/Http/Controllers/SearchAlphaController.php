<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchAlphaController extends Controller
{
    //
    public function Form() {

        $letters = ["0-1", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p",
            "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];


        return view('/alpha', [
                    "letters" => $letters
                ] );

    }
}
