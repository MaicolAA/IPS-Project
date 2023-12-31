<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('listadoPacientes', [App\Http\Controllers\ListadoPacientesController::class , 'listadoPacientes'])
   ->name('listadoPacientes');


   Route::get('listadoMedicos', [App\Http\Controllers\ListadoMedicosController::class , 'listadoMedicos'])
   ->name('listadoMedicos');

   Route::get('perfilPaciente', [App\Http\Controllers\perfilPacienteController::class , 'perfilPaciente'])
   ->name('perfilPaciente');

   Route::get('perfilDoctor', [App\Http\Controllers\perfilDoctorController::class , 'perfilDoctor'])
   ->name('perfilDoctor');

   Route::get('editar', [App\Http\Controllers\UserController::class, 'editar'])->name('editar');

   Route::put('actualizar', [App\Http\Controllers\UserController::class, 'actualizar'])->name('actualizar');
