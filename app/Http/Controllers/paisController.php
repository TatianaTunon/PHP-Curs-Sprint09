<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paisController extends Controller
{
    public function index(){
        echo "veo la funcion index </br>";
        //echo csrf_token();
    }
    public function store(){
        //echo csrf_token();
        echo "veo la funcion store"; 
        $paises = new paises();
        $paises->save();
        return Redirect::to('paises');
    }
    public function show($paises){
        echo "veo la funcion show";
    }
    public function update($paises){
        echo "veo la funcion update"; 
        $pais = paises::find($paises);
        $pais->save();
        return Redirect::to('paises');
    }
    public function destroy($paises){
        echo "veo la funcion destroy"; 
        $note = Note::find($paises);
        $note->delete();
        return Redirect::to('paises');
    }
}
