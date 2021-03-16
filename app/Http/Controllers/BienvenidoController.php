<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidoController extends Controller
{
    public function vista1 (){
        $data['nom']="Cassandra";
        return view ('Bienvenido',$data);
        //echo "estoy pasando por el controlador"; 
        //return view ('vista1');
    }
}
