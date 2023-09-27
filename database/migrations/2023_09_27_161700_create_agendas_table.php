<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->bigIncrements('codigo');

            $table->string('fk_doc_mujer');
            $table->foreign('fk_doc_mujer')->references('documento')->on('mujeres');

            $table->unsignedBigInteger('fk_cod_manzanas_servicios');
            $table->foreign('fk_cod_manzanas_servicios')->references('codigo')->on('manzanas_servicios');

            $table->dateTime('disponibilidad');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
