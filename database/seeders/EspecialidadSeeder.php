<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidad = new Especialidad();
        $especialidad2 = new Especialidad();
        $especialidad3 = new Especialidad();
        $especialidad4 = new Especialidad();
        $especialidad5 = new Especialidad();
        $especialidad6 = new Especialidad();
        $especialidad7 = new Especialidad();
        $especialidad8 = new Especialidad();
        $especialidad9 = new Especialidad();
        $especialidad10 = new Especialidad();

        $especialidad->nombre = "Vivienda";
        $especialidad2->nombre = "Obra";
        $especialidad3->nombre = "Nueva";
        $especialidad4->nombre = "Local";
        $especialidad5->nombre = "Nave";
        $especialidad6->nombre = "Garaje";
        $especialidad7->nombre = "Oficina";
        $especialidad8->nombre = "Trastero";
        $especialidad9->nombre = "Terreno";
        $especialidad10->nombre = "Edificio";

        $especialidad->save();
        $especialidad2->save();
        $especialidad3->save();
        $especialidad4->save();
        $especialidad5->save();
        $especialidad6->save();
        $especialidad7->save();
        $especialidad8->save();
        $especialidad9->save();
        $especialidad10->save();
        
    }
}
