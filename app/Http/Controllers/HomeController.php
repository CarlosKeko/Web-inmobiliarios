<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        return view("home/index");

    }

    public function registro() {
        return view("home/registro");       
    }

    public function show($perfil) {
        return view("home/show", ["perfil" => $perfil]);
    }
}
