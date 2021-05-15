<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_telefonos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_telefono',3);
            $table->string('numero',50)->unique();
            $table->integer('entidad_id')->index();
            $table->string('entidad',1);
            $table->integer('creado_por');
            $table->integer('actualizado_por')->nullable();
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
        Schema::dropIfExists('detalle_telefonos');
    }
}
