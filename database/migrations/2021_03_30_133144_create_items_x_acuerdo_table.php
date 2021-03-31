<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsXAcuerdoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_x_acuerdo', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');

            $table->unsignedBigInteger('idItem');
            $table->foreign('idItem')->references('id')->on('items')->onDelete('cascade');

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
        Schema::dropIfExists('items_x_acuerdo');
    }
}
