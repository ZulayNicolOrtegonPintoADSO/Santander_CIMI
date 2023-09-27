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
        Schema::create('manzanas_servicios', function (Blueprint $table) {
            $table->bigIncrements('codigo');

            $table->unsignedBigInteger('fk_cod_servicio');
            $table->foreign('fk_cod_servicio')->references('codigo')->on('servicios');  

            $table->unsignedBigInteger('fk_cod_manzana');
            $table->foreign('fk_cod_manzana')->references('codigo')->on('manzanas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manzanas_servicios');
    }
};
