<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BenvingutsController extends Controller
{
    public function vista3 (){
        //echo "estoy pasando por el controlador"; 
        return view ('Benvinguts');
    }
}
