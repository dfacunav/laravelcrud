<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;

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
    return view('auth.login');
});

Route::resource('pacientes','App\Http\Controllers\PacienteController');
Route::resource('pacientes/create','App\Http\Controllers\Controller');

Route::get('nombre', 'App\Http\Controllers\MunicipioController@nombre_funcion')->name('nombre_ruta');

//Route::resource('municipio','App\Http\Controllers\MunicipioController');

//Route::post('miJqueryAjax',[AjaxController::class,'index']);

//Route::post('datos','App\Http\Controllers\DepartamentoController');

//Route::resource('datos','App\Http\Controllers\DepartamentoController')
//->name( '*','DepartamentoController.index');//con este llamas en la vista

//Route::resource('pacientes/datos','App\Http\Controllers\DepartamentoController');

Route::middleware([

    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
