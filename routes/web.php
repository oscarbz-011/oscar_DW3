<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicio;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;


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
#Route::get('inicio',[inicio::class,'inicio']);

Route::resource('alumnos', AlumnoController::class);
Route::resource('cursos', CursoController::class);