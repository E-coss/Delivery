<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50)->unique();
            $table->string('descripcion')->nullable();
            $table->string('slug')->unique();
            $table->decimal('precio_compra',10);
            $table->decimal('precio_venta',10);
            $table->string('imagen',255);
            $table->enum('estado', ['Disponible', 'Agotado'])->default('Disponible');
            $table->integer('categoria_id');
            $table->integer('oferta_id')->nullable();
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
        Schema::dropIfExists('productos');
    }
}
