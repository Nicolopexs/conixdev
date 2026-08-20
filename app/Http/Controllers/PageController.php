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

    public function casosIndex()
    {
        return view('pages.casos-index');
    }

    public function cassaraDetail()
    {
        return view('pages.cassara-detail');
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
