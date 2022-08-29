<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tab extends Controller
{
    //
    public function tab($meio=2,$ini=0,$fim=10){
        for ($x = $ini; $x <= $fim; $x++){
            echo $meio." x ".$x." = ".($meio*$x)."<br>";
        };
    }
}
