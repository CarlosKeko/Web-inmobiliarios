<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = "perfiles";

    //Relación N a M con la tabla idiomas
    public function idiomas() {
        return $this->belongsToMany("App\Models\Idioma");
    }
    
    //Relación N a M con la tabla servicios
    public function servicios() {
        return $this->belongsToMany("App\Models\Servicio");
    }

    //Relación N a M con la tabla servicios
    public function especialidades() {
        return $this->belongsToMany("App\Models\Especialidad");
    }

    //Relación 1 a N con la tabla horarios
    public function horarios() {
        return $this->hasMany("App\Models\Horario");
    }

}
