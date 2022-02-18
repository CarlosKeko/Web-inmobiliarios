<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("perfiles", function(Blueprint $table){
            $table->id();
            $table->string("nombreAgente");
            $table->string("nombreEmpresa");
            $table->string("correo")->unique();
            $table->string("ciudad");
            $table->string("provincia");
            $table->string("direccion");
            $table->string("telefonoMovil");
            $table->string("telefonoFijo")->nullable();
            $table->string("paginaWeb")->nullable();
            $table->string("listaInmuebles")->nullable();
            // $table->string("idIdiomas");
            // $table->string("idServicios");
            // $table->string("idEspecialidades");
            $table->string("fotografia");
            $table->string("video");
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("youtube")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("twitter")->nullable();
            $table->string("horario");
            $table->text("descripcion");
            $table->text("serviciosDescripcion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("perfiles");
    }
};
