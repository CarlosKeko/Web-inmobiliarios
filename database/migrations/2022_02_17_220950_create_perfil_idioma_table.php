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
        Schema::create('perfil_idioma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("perfil_id");
            $table->unsignedBigInteger("idioma_id");
            $table->foreign("perfil_id")->references("id")->on("perfiles")->onDelete("cascade");
            $table->foreign("idioma_id")->references("id")->on("idiomas")->onDelete("cascade");
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
        Schema::dropIfExists('perfil_idioma');
    }
};
