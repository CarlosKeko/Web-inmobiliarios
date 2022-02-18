<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Horario extends Model
{
    use HasFactory;

    protected $table = "horarios";

    //Relacion de 1 a N con la tabla perfiles

    public function perfil() {
        return $this->belongsTo("App\Models\Perfil");
    }

}
