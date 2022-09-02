<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//RUTAS DE EMPLEADO
Route::get('/empleados', 'App\Http\Controllers\EmpleadoController@index');
Route::post('/empleados', 'App\Http\Controllers\EmpleadoController@store');
Route::put('/empleados/{id}', 'App\Http\Controllers\EmpleadoController@update');
Route::delete('/empleados/{id}', 'App\Http\Controllers\EmpleadoController@destroy');

//RUTAS DE ROL DE USUARIO
Route::get('/roldeusuarios', 'App\Http\Controllers\RolDeUsuarioController@index');
Route::post('/roldeusuarios', 'App\Http\Controllers\RolDeUsuarioController@store');
Route::put('/roldeusuarios/{id}', 'App\Http\Controllers\RolDeUsuarioController@update');
Route::delete('/roldeusuarios/{id}', 'App\Http\Controllers\RolDeUsuarioController@destroy');

//RUTAS DE MARCAJE
Route::get('/marcajes', 'App\Http\Controllers\MarcajeController@index');
Route::post('/marcajes', 'App\Http\Controllers\MarcajeController@store');
Route::put('/marcajes/{id}', 'App\Http\Controllers\MarcajeController@update');
Route::delete('/marcajes/{id}', 'App\Http\Controllers\MarcajeController@destroy');