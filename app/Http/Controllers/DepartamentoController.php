<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(){
        echo "veo la funcion index";
    }
    public function store(){
        echo "veo la funcion store"; //no se ve
        $departamento = new departamento();
        $departamento->save();
        return Redirect::to('departamento');
    }
    public function show($departamento){
        echo "veo la funcion show";
    }
    public function update($departamento){
        echo "veo la funcion update"; //no se ve
        $departemento = departementos::find($departemento);
        $departemento->save();
        return Redirect::to('departementos');
    }
    public function destroy($departamento){
        echo "veo la funcion destroy"; //no se ve
        $note = Note::find($departamento);
        $note->delete();
        return Redirect::to('departementos');
    }
}
