<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    use HasFactory;

    protected $table = "idiomas";

    //Relación N a M con la tabla perfiles
    public function perfiles() {
        return $this->belongsToMany("App\Models\Perfil");
    }
}
