<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Usuarios
Route::get('getUsuarios', 'App\Http\Controllers\UsuarioController@Get');

Route::get('getProfesores', 'App\Http\Controllers\ProfesoresController@Get');

//Profesores

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    //Route::get('getUsuarios', 'UsuarioController@Get');
});
