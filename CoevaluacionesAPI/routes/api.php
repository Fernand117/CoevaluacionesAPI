<?php

use App\Http\Controllers\CampusController;
use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\GradosController;
use App\Http\Controllers\PeriodosController;
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

//////////////////////////UsuarioController///////////////////////////////////
Route::get('/usuarios',[UsuarioController::class,'index']);
Route::post('/usuarios',[UsuarioController::class,'store']);
Route::get('/usuarios/{id}',[UsuarioController::class,'edit']);
Route::put('/usuarios/{id}',[UsuarioController::class,'update']);
Route::delete('/usuarios/{id}',[UsuarioController::class,'delete']);

Route::get('campus', [CampusController::class, 'CampusController@index']);
Route::post('crear/campus', [CampusController::class, 'CampusController@store']);
Route::put('campust/editar/{id}', [CampusController::class, 'CampusController@edit']);
Route::delete('eliminar/campus/{id}', [CampusController::class, 'CampusController@destroy']);

Route::get('grados', [GradosController::class, 'GradosController@listarGrados']);
Route::post('registrar/grados', [GradosController::class, 'GradosController@crearGrado']);
Route::put('editar/grados', [GradosController::class, 'GradosController@editarGrado']);
Route::delete('eliminar/grado', [GradosController::class, 'GradosController@eliminarGrado']);

Route::get('carreras', [CarrerasController::class, 'CarrerasController@listarCarreras']);
Route::post('crear/carrera', [CarrerasController::class, 'CarrerasController@crearGrupo']);
Route::put('editar/carrera', [CarrerasController::class, 'CarrerasController@editarCarrera']);
Route::delete('eliminar/carrera', [CarrerasController::class, 'CarrerasController@eliminarCarrera']);

Route::get('periodos', [PeriodosController::class, 'PeriodosController@listarPeriodos']);
Route::post('crear/periodo', [PeriodosController::class, 'PeriodosController@crearPeriodos']);
Route::put('editar/periodo', [PeriodosController::class, 'PeriodosController@editarPeriodos']);
Route::delete('eliminar/periodo', [PeriodosController::class, 'PeriodosController@eliminarPeriodos']);

Route::get('grupos', [GruposController::class, 'GruposController@listarGrupos']);
Route::post('registrar/grupos', [GruposController::class, 'GruposController@crearGrupos']);
Route::put('editar/grupos', [GruposController::class, 'GruposController@editarGrupo']);
Route::delete('eliminar/grupo', [GruposController::class, 'GruposController@eliminarGrupo']);
