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
        Schema::create('servicios', function (Blueprint $table) {
            $table->bigIncrements('codigo');
            $table->string('nombre' , 20);
            $table->string('descripcion' , 250);
            $table->unsignedBigInteger('fk_codigo_categoria_servicios');
            $table->foreign('fk_codigo_categoria_servicios')->references('codigo')->on('categorias_servicios');

            $table->unsignedBigInteger('fk_codigo_establecimiento');
            $table->foreign('fk_codigo_establecimiento')->references('codigo')->on('municipios');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
