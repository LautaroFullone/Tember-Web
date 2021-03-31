<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturaciones', function (Blueprint $table) {
            $table->id();
            $table->string('metodo');
            $table->date('desde')->nullable();
            $table->time('hasta')->nullable();

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
        Schema::dropIfExists('facturaciones');
    }
}
