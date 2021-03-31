<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcuerdosDeNegocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acuerdos_de_negocio', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('publicaciones_min')->nullable();
            $table->integer('publicaciones_max')->nullable();

            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('acuerdos_de_negocio');
    }
}
