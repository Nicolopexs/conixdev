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
Route::get('/desarrollo-de-software-ecuador', [PageController::class, 'desarrolloSoftwareEcuador'])->name('servicios.desarrollo-de-software-ecuador');
Route::get('/desarrollo-de-software-quito-ecuador', [PageController::class, 'desarrolloSoftwareQuito'])->name('servicios.desarrollo-de-software-quito');
Route::get('/desarrollo-de-software-guayaquil', [PageController::class, 'desarrolloSoftwareGuayaquil'])->name('servicios.desarrollo-de-software-guayaquil');
Route::get('/desarrollo-de-aplicaciones-moviles', [PageController::class, 'desarrolloAplicacionesMoviles'])->name('servicios.desarrollo-de-apps-moviles');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');
Route::get('/desarrollo-software-ecuador', [PageController::class, 'desarrolloSoftwareEcuador'])->name('servicios.software-ecuador');
Route::get('/desarrollo-aplicaciones-moviles', [PageController::class, 'desarrolloAplicacionesMoviles'])->name('servicios.apps-moviles');
Route::get('/software-empresarial', [PageController::class, 'softwareEmpresarial'])->name('servicios.software-empresarial');
Route::get('/automatizacion-procesos', [PageController::class, 'automatizacionProcesos'])->name('servicios.automatizacion');

// Casos de Éxito & Evidencia Real (E-E-A-T)
Route::get('/casos-de-exito', [PageController::class, 'casosIndex'])->name('casos.index');
Route::get('/casos-de-exito/cassara-ecuador', [PageController::class, 'cassaraDetail'])->name('casos.cassara');

// Landing pages SEO para Apps de Visitadores Médicos & Industria Farmacéutica
$pharmaRoutes = [
    '/demos/app-visitadores-medicos',
    '/software-para-visitadores-medicos',
    '/app-para-visitadores-medicos',
    '/app-para-controlar-visitadores-medicos',
    '/app-para-empresas-farmaceuticas',
    '/software-para-fuerza-de-ventas-farmaceutica',
    '/app-para-visitas-medicas',
    '/control-de-visitas-medicas',
    '/seguimiento-de-visitadores-medicos',
    '/planificacion-de-visitas-medicas',
    '/geolocalizacion-de-visitadores-medicos',
    '/reportes-de-visitadores-medicos',
    '/control-de-rutas-visitadores-medicos',
    '/app-para-visitadores-medicos-ecuador',
    '/software-visitadores-medicos-ecuador',
    '/app-farmaceutica-ecuador',
];
foreach ($pharmaRoutes as $route) {
    Route::get($route, [PageController::class, 'cassaraDetail']);
}


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
