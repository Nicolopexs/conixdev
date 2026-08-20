<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function servicios()
    {
        return view('pages.servicios');
    }

    public function desarrolloSoftwareEcuador()
    {
        return view('pages.desarrollo-software-ecuador');
    }

    public function desarrolloAplicacionesMoviles()
    {
        return view('pages.desarrollo-aplicaciones-moviles');
    }

    public function softwareEmpresarial()
    {
        return view('pages.software-empresarial');
    }

    public function automatizacionProcesos()
    {
        return view('pages.automatizacion-procesos');
    }

    public function casosIndex()
    {
        return view('pages.casos-index');
    }

    public function cassaraDetail()
    {
        return view('pages.cassara-detail');
    }

    public function blogIndex()
    {
        return view('pages.blog-index');
    }

    public function blogCostoSoftware()
    {
        return view('pages.blog-costo-software');
    }

    public function blogMedidaVsEstandar()
    {
        return view('pages.blog-medida-vs-estandar');
    }

    public function nosotros()
    {
        return view('pages.nosotros');
    }

    public function diagnostico()
    {
        return view('pages.diagnostico');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }
}
