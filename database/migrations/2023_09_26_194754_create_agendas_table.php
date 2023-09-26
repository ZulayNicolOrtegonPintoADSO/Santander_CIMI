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
            $table->string('nombre' , 20);
            $table->string('descripcion' , 250);
            $table->string('fk_documento');
            $table->foreign('fk_documento')->references('documento')->on('mujeres');
            $table->unsignedBigInteger('fk_codigo_servicios');
            $table->foreign('fk_codigo_servicios')->references('codigo')->on('servicios');
            $table->unsignedBigInteger('fk_codigo_manzana');
            $table->foreign('fk_codigo_manzana')->references('codigo')->on('manzanas_del_cuidado');
            $table->date('dia');
            $table->time('hora');
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
