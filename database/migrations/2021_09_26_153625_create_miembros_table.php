<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20)->unique();
            $table->string('puesto',30);
            $table->string('descripcion');
            $table->string('imagen',30)->unique();
            $table->enum('estado', ['Activo', 'Inactivo'])->default('Activo');
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
        Schema::dropIfExists('miembros');
    }
}
