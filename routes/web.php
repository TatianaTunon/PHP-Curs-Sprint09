<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paisController;
use App\Http\Controllers\DepartamentoController;

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

//RUTAS CONTROLADOR PAIS

//El método prefix se puede usar para prefijar cada ruta en el grupo con una URL dada.
//Route::prefix('/paises')->group (function () {    });

Route::get('/paises', [paisController::class, 'index'])->name ('index');
Route::post('/paises', [paisController::class, 'store'])->name ('store');
Route::get('/paises/{paises}', [paisController::class, 'show'])->name ('show');
Route::match(['put', 'patch'], '/paises/{paises}', [paisController::class, 'updata'])->name ('updata');
Route::delete('/paises/{paises}', [paisController::class, 'destroy'])->name ('destroy');

//RUTAS CONTROLADOR DEPARTAMENTO
Route::get('/paises/{paises}/departamento', [DepartamentoController::class, 'index'])->name ('index');
Route::post('/paises/{paises}/departamento', [DepartamentoController::class, 'store'])->name ('store');
Route::get('/paises/{paises}/departamento/{departamento}', [DepartamentoController::class, 'show'])->name ('show');
Route::match(['put', 'patch'],'/paises/{paises}/departamento/{departamento}', [DepartamentoController::class, 'updata'])->name ('updata');
Route::delete('/paises/{paises}/departamento/{departamento}', [DepartamentoController::class, 'destroy'])->name ('destroy');
