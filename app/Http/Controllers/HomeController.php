<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Horario;
use App\Models\Idioma;
use App\Models\Perfil;
use App\Models\Servicio;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class HomeController extends Controller
{

    public function __invoke() {
        return view("home/index");
    }

    public function registro() {
        return view("home/registro");       
    }

    public function previa(Request $formulario) {

        $formulario->validate([
            'correo' => 'required|email|unique:perfiles',

        ]);

        $servicio = new Servicio();
        $horario = new Horario();
        $especialidad = new Especialidad();
        $perfil = new Perfil();

        if(count(Perfil::where("correo", "=", strtolower($formulario->email))->get()) < 1) {
            $perfil->nombreAgente = $formulario->nombreagente;
            $perfil->nombreEmpresa = $formulario->nombreempresa;
            $perfil->correo = $formulario->correo;
            $perfil->ciudad = $formulario->ciudad;
            $perfil->provincia = $formulario->provincia;
            $perfil->direccion = $formulario->direccion;
            $perfil->telefonoMovil = $formulario->telefonomovil;
            $perfil->telefonoFijo = $formulario->telefonofijo;
            $perfil->paginaWeb = $formulario->web;
            $perfil->listaInmuebles = $formulario->inmuebles;
            $perfil->fotografia = $formulario->imagen;
            $perfil->video = $formulario->video;
            $perfil->facebook = $formulario->rrssfacebook;
            $perfil->instagram = $formulario->rrssinstagram;
            $perfil->youtube = $formulario->rrssyoutube;
            $perfil->linkedin = $formulario->rrsslinkedin;
            $perfil->twitter = $formulario->rrsstwitter;
            $perfil->descripcion = $formulario->sombremi;
            $perfil->serviciosDescripcion = $formulario->serviciostexto;
            
            if ($perfil->save()) {
                foreach($formulario->idiomas as $idioma) {
                    $idiomaBuscado = Idioma::where("nombre", "=", strtolower($idioma))->get();
                    if (count($idiomaBuscado) >= 1) {
                        $perfil->idiomas()->attach($idiomaBuscado[0]);

                    }
                }

                foreach($formulario->servicios as $servicio) {
                    $servicioBuscado = Servicio::where("nombre", "=", strtolower($servicio))->get();
                    if (count($servicioBuscado) >= 1) {
                        $perfil->servicios()->attach($servicioBuscado[0]);

                    }
                }

                foreach($formulario->especialidades as $especialidad) {
                    $especialidadBuscada = Especialidad::where("nombre", "=", strtolower($especialidad))->get();
                    if (count($especialidadBuscada) >= 1) {
                        $perfil->especialidades()->attach($especialidadBuscada[0]);

                    }
                }

                return $perfil;

            }else {
                return "fallo";

            }


        }else {
            return "email repetido";

        }

    }
}
