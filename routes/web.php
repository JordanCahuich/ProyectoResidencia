<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\PagosController; 
use App\Http\Controllers\CargasController;
use App\Http\Controllers\SettingsController; 

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/cargas/index', [CargasController::class, 'index']);
Route::get('/cargas/create', [CargasController::class, 'create']);

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');  
require __DIR__.'/auth.php'; 


Route::resource('curso', CursosController::class)->middleware('auth');
Route::resource('profe', ProfesoresController::class)->middleware('auth');
Route::resource('alumno', AlumnosController::class)->middleware('auth');
Route::resource('pago', PagosController::class)->middleware('auth');
Route::resource('carga', CargasController::class)->middleware('auth');
Route::post('/pagoSave', 'App\Http\Controllers\PagosController@guardarPago')->name("pagoSave")->middleware('auth'); //Guardando Pago


Route::get('excel/exportAlumnos', 'App\Http\Controllers\AlumnosController@exportAlumnos')->name("exportAlumnos")->middleware('auth');
Route::get('/exportPagos', 'App\Http\Controllers\PagosController@exportPagosAlumnos')->name("exportPagosAlumnos")->middleware('auth');


Route::get('/NewPassword',  [SettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [SettingsController::class,'changePassword'])->name('changePassword');





/*Route::get('carga', function () {
    return view('carga');
})->middleware(['auth', 'verified'])->name('carga');  
require __DIR__.'/auth.php'; */

Route::get('/clear-cache', function () {
    echo Artisan::call('config:clear');
    echo Artisan::call('config:cache');
    echo Artisan::call('cache:clear');
    echo Artisan::call('route:clear');
 });