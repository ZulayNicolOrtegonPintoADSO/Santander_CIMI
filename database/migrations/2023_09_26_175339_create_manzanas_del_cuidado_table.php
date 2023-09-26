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
        Schema::create('manzanas_del_cuidado', function (Blueprint $table) {
            $table->bigIncrements('codigo');
            $table->string('nombre' , 20);
            $table->string('localidad' , 50);
            $table->string('direccion');
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
        Schema::dropIfExists('manzanas_del_cuidado');
    }
};
