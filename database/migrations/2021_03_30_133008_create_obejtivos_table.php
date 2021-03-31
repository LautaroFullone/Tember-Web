<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObejtivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();

            $table->unsignedBigInteger('acuerdoId');
            $table->foreign('acuerdoId')->references('id')->on('acuerdos_de_negocio')->onDelete('cascade');

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
        Schema::dropIfExists('objetivos');
    }
}
