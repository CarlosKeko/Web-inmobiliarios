<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function show($perfil) {
        return view("home/show", ["perfil" => $perfil]);
    }

}
