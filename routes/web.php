<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\PagosController; 
use App\Http\Controllers\ConceptosController; 
use App\Http\Controllers\CargasController;
use App\Http\Controllers\SettingsController;
use App\Models\Cargas;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 


Route::get('/pago', [PagosController::class,'index']);
Route::get('/pagos/register', [PagosController::class,'search']);
Route::get('/pagos/config', [PagosController::class,'configPago'])->name('pagos.configuracion');

Route::get('/concepts', [ConceptosController::class,'index']);
Route::get('/concepts/create', [ConceptosController::class,'create']);
Route::get('/concepts/pago', [ConceptosController::class,'formaPago'])->name('concepto.forma');

/* CARGAS */

Route::get('/cargas', [CargasController::class, 'index']);
Route::get('/cargas/create', [CargasController::class, 'create']);
Route::post('/cargas', [CargasController::class, 'store']);
Route::get('/cargas/{id}/edit', [CargasController::class, 'edit']);

Route::put('/cargas/{id}', [CargasController::class, 'update']);
Route::delete('/cargas/{id}', [CargasController::class, 'destroy']);

/* PROFESORES */

Route::get('/profes', [ProfesoresController::class, 'index']);
Route::get('/profes/create', [ProfesoresController::class, 'create']);
Route::post('/profes', [ProfesoresController::class, 'store']);
Route::get('/profes/{id}/edit', [ProfesoresController::class, 'edit']);

Route::put('/profes/{id}', [ProfesoresController::class, 'update']);
Route::delete('/profes/{id}', [ProfesoresController::class, 'destroy']);



Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');  
require __DIR__.'/auth.php'; 

Route::resource('curso', CursosController::class)->middleware('auth');
Route::resource('profe', ProfesoresController::class)->middleware('auth');
Route::resource('alumno', AlumnosController::class)->middleware('auth');
Route::resource('pago', PagosController::class)->middleware('auth');
Route::resource('carga', CargasController::class)->middleware('auth');
Route::resource('concepto', ConceptosController::class)->middleware('auth');
Route::post('/pagoSave', 'App\Http\Controllers\PagosController@guardarPago')->name("pagoSave")->middleware('auth'); //Guardando Pago


Route::get('excel/exportAlumnos', 'App\Http\Controllers\AlumnosController@exportAlumnos')->name("exportAlumnos")->middleware('auth');
Route::get('/exportPagos', 'App\Http\Controllers\PagosController@exportPagosAlumnos')->name("exportPagosAlumnos")->middleware('auth');


Route::get('/NewPassword',  [SettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [SettingsController::class,'changePassword'])->name('changePassword');





Route::get('/clear-cache', function () {
    echo Artisan::call('config:clear');
    echo Artisan::call('config:cache');
    echo Artisan::call('cache:clear');
    echo Artisan::call('route:clear');
 });