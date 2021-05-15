<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('direccion',100);
            $table->string('eslogan',100);
            $table->string('email',50);
            $table->text('favicon')->nullable();
            $table->text('logo_admin')->nullable();
            $table->text('logo_frontend')->nullable();
            $table->text('marca')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('twitter')->nullable();
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
        Schema::dropIfExists('configuracions');
    }
}
