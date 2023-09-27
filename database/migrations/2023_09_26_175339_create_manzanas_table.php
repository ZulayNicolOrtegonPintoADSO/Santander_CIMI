<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('manzanas', function (Blueprint $table) {
            $table->bigIncrements('codigo');
            $table->string('nombre' , 20);
            $table->string('localidad' , 50);
            $table->string('direccion', 50);
            $table->unsignedBigInteger('fk_cod_municipio');
            $table->foreign('fk_cod_municipio')->references('codigo')->on('municipios');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manzanas');
    }
};
