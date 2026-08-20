<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| ConixDev Multi-Page Web Routes
|--------------------------------------------------------------------------
|
| Arquitectura corporativa de rutas independientes para conixdev.com
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');
Route::get('/casos-de-exito', [PageController::class, 'casosIndex'])->name('casos.index');
Route::get('/casos-de-exito/cassara-ecuador', [PageController::class, 'cassaraDetail'])->name('casos.cassara');
Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');
Route::get('/diagnostico', [PageController::class, 'diagnostico'])->name('diagnostico');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');

// Form submission handler
Route::post('/contacto/diagnostico', [ContactController::class, 'submitDiagnostico'])->name('contacto.diagnostico.submit');
