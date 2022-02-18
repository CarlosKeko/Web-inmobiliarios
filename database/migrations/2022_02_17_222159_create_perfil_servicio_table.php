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
        Schema::create('perfil_servicio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("perfil_id");
            $table->unsignedBigInteger("servicio_id");
            $table->foreign("perfil_id")->references("id")->on("perfiles")->onDelete("cascade");
            $table->foreign("servicio_id")->references("id")->on("servicios")->onDelete("cascade");
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
        Schema::dropIfExists('perfil_servicio');
    }
};
