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
        Schema::create('mujeres', function (Blueprint $table) {
            $table->string('documento' , 10)->index();;
            $table->string('tipo_documento' , 20);
            $table->string('nombres' , 20);
            $table->string('apellidos' , 20);
            $table->string('ciudad' , 20);
            $table->string('telefono' , 12);
            $table->string('correo' , 30);
            $table->string('direccion' , 50);
            $table->string('ocupacion' , 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mujeres');
    }
};
