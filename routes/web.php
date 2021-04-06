<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienvenidoController;
use App\Http\Controllers\WelcomController;
use App\Http\Controllers\BenvingutsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//RUTAS PASANDO POR CONTROLADOR (acuerdate de poner los use)
Route::get('/vista1/{nom}', [BienvenidoController::class, 'vista1'])->name ('hola');
Route::get('/vista2', [WelcomController::class, 'vista2'])->name ('hi');
Route::get('/vista3', [BenvingutsController::class, 'vista3'])->name ('benvinguts');


//RUTAS LLAMADAS DIRECTAMENTE DESDE LA VISTA
//Route::view('vista1', 'vista1')->name ('vista1');
//Route::view('vista2', 'vista2')->name ('vista2');
//Route::view('vista3', 'vista3')->name ('vista3');
