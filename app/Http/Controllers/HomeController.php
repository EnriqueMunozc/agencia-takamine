<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()        { return view('pages.home'); }

    public function catalogo()     { return view('pages.catalogo'); }
    public function catalogo12()   { return view('pages.catalogo-12cuerdas'); }
    public function catalogo6()    { return view('pages.catalogo-6cuerdas'); }
    public function accesorios()   { return view('pages.accesorios'); }

    public function regional()     { return view('pages.regional'); }
    public function norteno()      { return view('pages.norteno'); }
    public function banda()        { return view('pages.banda'); }
    public function ranchero()     { return view('pages.ranchero'); }

    public function nosotros()     { return view('pages.nosotros'); }
    public function blog()         { return view('pages.blog'); }
    public function sitemap()      { return view('pages.sitemap'); }
    public function ayuda()        { return view('pages.ayuda'); }

    public function buzon()
    {
        return view('pages.buzon');
    }
}
