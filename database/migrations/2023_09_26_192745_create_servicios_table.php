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
            $table->string('descripcion' , 50);

            $table->unsignedBigInteger('fk_cod_categoria');
            $table->foreign('fk_cod_categoria')->references('codigo')->on('categorias');

            $table->unsignedBigInteger('fk_cod_establecimiento');
            $table->foreign('fk_cod_establecimiento')->references('codigo')->on('establecimientos');  
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
