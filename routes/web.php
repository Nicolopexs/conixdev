<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| ConixDev Web Routes
|--------------------------------------------------------------------------
|
| Rutas principales para la plataforma corporativa de ConixDev.
|
*/

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::post('/contacto/diagnostico', [ContactController::class, 'submitDiagnostico'])->name('contacto.diagnostico');
