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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->string('rut');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('comuna');
            $table->string('telefono');
            
            $table->string('nombre_usuario');
            $table->string('contraseña');
            $table->timestamps();
        });
    }

     /*Rut, nombre, apellido, dirección, comuna, teléfono)  más, un nombre de usuario y contraseña
    */
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
