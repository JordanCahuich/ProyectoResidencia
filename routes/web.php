<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\PagosController; 
use App\Http\Controllers\ConceptosController; 
use App\Http\Controllers\FormaPagoController;   
use App\Http\Controllers\CargasController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/pago', [PagosController::class,'index']);
Route::get('/pagos/register', [PagosController::class,'search']);
Route::get('/pagos/config', [PagosController::class,'configPago'])->name('pagos.configuracion');
Route::post('/pago',[PagosController::class,'store']);

Route::get('/concepts', [ConceptosController::class,'index']);
Route::get('/concepts/create', [ConceptosController::class,'create']);
Route::get('/concepts/pago', [ConceptosController::class,'formaPago'])->name('concepto.forma');
Route::get('/concepts/formapago', [FormaPagoController::class,'create'])->name('formapago.create');
Route::post('/concepts/pago',[FormaPagoController::class,'store']);
Route::get('/concepts/{id}/edit',[ConceptosController::class,'edit']);
Route::get('/concepts/pago/{id}/edit',[FormaPagoController::class,'edit'])->name('concepto.formaedit');

Route::put('/concepts/{id}',[ConceptosController::class,'update']);
Route::put('/concepts/pago/{id}',[FormaPagoController::class,'update']);
Route::delete('/concepts/{id}',[ConceptosController::class,'destroy']);
Route::delete('/concepts/pago/{id}',[FormaPagoController::class,'destroy']);

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
Route::resource('concepto', ConceptosController::class)->middleware('auth');
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