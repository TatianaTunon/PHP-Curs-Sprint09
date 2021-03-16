<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function vista2 (){
        //echo "estoy pasando por el controlador"; 
        return view ('Welcom');
        }
}
