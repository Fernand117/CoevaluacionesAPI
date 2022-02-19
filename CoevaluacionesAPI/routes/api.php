<?php

use App\Http\Controllers\CampusController;
use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\GradosController;
use App\Http\Controllers\GruposController;
use App\Http\Controllers\ModalidadesController;
use App\Http\Controllers\PeriodosController;
use App\Http\Controllers\UsuarioController;
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

Route::get('campus', [CampusController::class, 'index']);
Route::post('crear/campus', [CampusController::class, 'store']);
Route::put('campust/editar/{id}', [CampusController::class, 'edit']);
Route::delete('eliminar/campus/{id}', [CampusController::class, 'destroy']);

Route::get('grados', [GradosController::class, 'listarGrados']);
Route::post('registrar/grados', [GradosController::class, 'crearGrado']);
Route::put('editar/grados', [GradosController::class, 'editarGrado']);
Route::delete('eliminar/grado', [GradosController::class, 'eliminarGrado']);

Route::get('carreras', [CarrerasController::class, 'listarCarreras']);
Route::post('crear/carrera', [CarrerasController::class, 'crearGrupo']);
Route::put('editar/carrera', [CarrerasController::class, 'editarCarrera']);
Route::delete('eliminar/carrera', [CarrerasController::class, 'eliminarCarrera']);

Route::get('periodos', [PeriodosController::class, 'listarPeriodos']);
Route::post('crear/periodo', [PeriodosController::class, 'crearPeriodos']);
Route::put('editar/periodo', [PeriodosController::class, 'editarPeriodos']);
Route::delete('eliminar/periodo', [PeriodosController::class, 'eliminarPeriodos']);

Route::get('modalidad',[ModalidadesController::class, 'index']);
Route::post('crear/modalidad',[ModalidadesController::class,'store']);
Route::put('modalidad/editar/{id}', [ModalidadesController::class,'edit']);
Route::delete('eliminar/modalidad/{id}',[ModalidadesController::class,'destroy']);

Route::get('grupos', [GruposController::class, 'listarGrupos']);
Route::post('registrar/grupos', [GruposController::class, 'crearGrupo']);
Route::put('editar/grupos', [GruposController::class, 'editarGrupo']);
Route::delete('eliminar/grupo', [GruposController::class, 'eliminarGrupo']);
