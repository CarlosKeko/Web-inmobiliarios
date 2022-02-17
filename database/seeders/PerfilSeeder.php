<?php

namespace Database\Seeders;

use App\Models\Perfil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfil = new Perfil();

        $perfil->nombreAgente = "Carlos Urbina";
        $perfil->nombreEmpresa = "Casa";
        $perfil->correo = "prueba@gmail.com";
        $perfil->ciudad = "Sabadell";
        $perfil->provincia = "Barcelona";
        $perfil->direccion = "prueba 12a 42a";
        $perfil->telefonoMovil = "619426784";
        $perfil->telefonoFijo = "952684921";
        $perfil->paginaWeb = "www.prueba.com";
        $perfil->listaInmuebles = "wwww.prueba.com/inmuebles";
        $perfil->idIdiomas = "1";
        $perfil->idServicios = "2";
        $perfil->idEspecialidades = "1";
        $perfil->fotografia = "prueba.png";
        $perfil->video = "historia.com";
        $perfil->facebook = "pruebaface";
        $perfil->instagram = "pruebainsta";
        $perfil->youtube = "pruebayoutube";
        $perfil->linkedin = "pruebalinkedin";
        $perfil->twitter = "pruebatwitter";
        $perfil->horario = "lunes";
        $perfil->descripcion = "prueba descripcion";
        $perfil->serviciosDescripcion= "prueba descripciones";

        $perfil->save();
    }
}
