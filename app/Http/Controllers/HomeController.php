<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin', ['only'=>'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home'); // la ruta home sera solo para el administrador
    }

    public function getUser(){
        return view('user');
    }

    public function getModerador(){
        return view('moderador');
    }

    public function getSuper(){
        return view('superAdmin');
    }
}
