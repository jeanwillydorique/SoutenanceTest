

    
@php

    $letters = ["0-1", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p",
            "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]; 

    foreach ($letters as $key => $letter) {  

        $ligne = '<a>';
        $ligne .= $letter ;
        $ligne .= '</a>';
 
        echo $ligne;
    }; 


@endphp