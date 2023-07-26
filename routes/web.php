<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamenController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('examen/alice-bob');
});

Route::get('/index',[ExamenController::class,'index'] );
Route::get('/puntuacion',[ExamenController::class,'puntuacion'] )->name('puntuacion');
Route::post('/procesar-puntuacion',[ExamenController::class,'procesando_p'] )->name('procesando_puntuacion');

Route::get('/repeticion_palabras',[ExamenController::class, 'repticion_palabras'])->name('repticion_palabras');

Route::get('/procesar-texto',[ExamenController::class,'procesando_texto'])->name('procesando_texto') ;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
