<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke() {
        return view("home/index");
    }

    public function registro() {
        return view("home/registro");       
    }

    public function previa(Request $formulario) {
        $perfil = new Perfil();
        $perfil->nombreAgente = $formulario->nombreAgente;

        return $formulario->nombre;
    }
}
