<?php

namespace Database\Seeders;

use App\Models\Idioma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idioma = new Idioma();
        $idioma2 = new Idioma();
        $idioma3 = new Idioma();
        $idioma4 = new Idioma();
        $idioma5 = new Idioma();
        $idioma6 = new Idioma();
        $idioma7 = new Idioma();
        $idioma8 = new Idioma();
        $idioma9 = new Idioma();
        $idioma10 = new Idioma();
        $idioma11 = new Idioma();
        $idioma12 = new Idioma();

        $idioma->nombre = "Español";
        $idioma2->nombre = "Inglés";
        $idioma3->nombre = "Francés";
        $idioma4->nombre = "Alemán";
        $idioma5->nombre = "Chino";
        $idioma6->nombre = "Árabe";
        $idioma7->nombre = "Ruso";
        $idioma8->nombre = "Portugués";
        $idioma9->nombre = "Italiano";
        $idioma10->nombre = "Euskera";
        $idioma11->nombre = "Catalán";
        $idioma12->nombre = "Gallego";

        $idioma->save();
        $idioma2->save();
        $idioma3->save();
        $idioma4->save();
        $idioma5->save();
        $idioma6->save();
        $idioma7->save();
        $idioma8->save();
        $idioma9->save();
        $idioma10->save();
        $idioma11->save();
        $idioma12->save();
        
    }
}
