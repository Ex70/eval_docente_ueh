<?php

use App\Http\Controllers\DocenteController;
use App\Http\Controllers\LicenciaturaController;
use App\Http\Controllers\ProgramaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/licenciaturas',[LicenciaturaController::class,'index']);
Route::post('/licenciaturas/agregarLicenciatura',[LicenciaturaController::class,'create']);
Route::get('/licenciaturas/borrar/{id}', [LicenciaturaController::class, 'destroy']);
Route::get('/licenciaturas/editar/{id}',[LicenciaturaController::class, 'edit']);
Route::post('/licenciaturas/editar/{id}', [LicenciaturaController::class, 'update']);

Route::get('/programas',[ProgramaController::class,'index']);
Route::post('/programas/agregarPrograma',[ProgramaController::class,'create']);
Route::get('/programas/borrar/{id}', [ProgramaController::class, 'destroy']);
Route::get('/programas/editar/{id}',[ProgramaController::class, 'edit']);
Route::post('/programas/editar/{id}', [ProgramaController::class, 'update']);

Route::get('/docentes',[DocenteController::class,'index']);
Route::post('/docentes/agregarDocente',[DocenteController::class,'create']);
Route::get('/docentes/borrar/{id}', [DocenteController::class, 'destroy']);
Route::get('/docentes/editar/{id}',[DocenteController::class, 'edit']);
Route::post('/docentes/editar/{id}', [DocenteController::class, 'update']);