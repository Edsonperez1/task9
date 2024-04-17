<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function casa()
    {
        return view('casa');
    }

    public function fotos()
    {
        return view('fotos');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
