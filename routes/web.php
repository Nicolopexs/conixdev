<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| ConixDev Multi-Page Web Routes — Arquitectura SEO B2B & GEO (IA)
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');

// Servicios Generales & Verticales Dedicadas (Exact-Match SEO URLs)
Route::get('/desarrollo-de-software', [PageController::class, 'desarrolloDeSoftware'])->name('servicios.desarrollo-de-software');
Route::get('/desarrollo-de-software-a-medida', [PageController::class, 'desarrolloDeSoftwareAMedida'])->name('servicios.desarrollo-de-software-a-medida');
Route::get('/desarrollo-de-aplicaciones-moviles', [PageController::class, 'desarrolloAplicacionesMoviles'])->name('servicios.desarrollo-de-apps-moviles');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');
Route::get('/desarrollo-software-ecuador', [PageController::class, 'desarrolloSoftwareEcuador'])->name('servicios.software-ecuador');
Route::get('/desarrollo-aplicaciones-moviles', [PageController::class, 'desarrolloAplicacionesMoviles'])->name('servicios.apps-moviles');
Route::get('/software-empresarial', [PageController::class, 'softwareEmpresarial'])->name('servicios.software-empresarial');
Route::get('/automatizacion-procesos', [PageController::class, 'automatizacionProcesos'])->name('servicios.automatizacion');

// Casos de Éxito & Evidencia Real (E-E-A-T)
Route::get('/casos-de-exito', [PageController::class, 'casosIndex'])->name('casos.index');
Route::get('/casos-de-exito/cassara-ecuador', [PageController::class, 'cassaraDetail'])->name('casos.cassara');

// Centro de Conocimiento / Blog (Respuestas para Búsquedas por IA & Google)
Route::get('/blog', [PageController::class, 'blogIndex'])->name('blog.index');
Route::get('/blog/cuanto-cuesta-desarrollar-software-ecuador', [PageController::class, 'blogCostoSoftware'])->name('blog.costo-software');
Route::get('/blog/software-a-medida-vs-estandar', [PageController::class, 'blogMedidaVsEstandar'])->name('blog.medida-vs-estandar');

// Empresa & Conversión
Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');
Route::get('/diagnostico', [PageController::class, 'diagnostico'])->name('diagnostico');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');

// Form submission handler
Route::post('/contacto/diagnostico', [ContactController::class, 'submitDiagnostico'])->name('contacto.diagnostico.submit');
