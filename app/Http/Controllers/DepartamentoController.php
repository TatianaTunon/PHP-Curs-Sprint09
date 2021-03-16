<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(){
        echo "veo la funcion index de departamento";
    }
    public function store(){
        echo "veo la funcion store de departamento";
        $departamento = new departamento();
        $departamento->save();
        return Redirect::to('departamento');
    }
    public function show($departamento){
        echo "veo la funcion show de departamento";
    }
    public function update($departamento){
        echo "veo la funcion update de departamento"; 
        $departemento = departementos::find($departemento);
        $departemento->save();
        return Redirect::to('departementos');
    }
    public function destroy($departamento){
        echo "veo la funcion destroy de departamento"; 
        $note = Note::find($departamento);
        $note->delete();
        return Redirect::to('departementos');
    }
}
