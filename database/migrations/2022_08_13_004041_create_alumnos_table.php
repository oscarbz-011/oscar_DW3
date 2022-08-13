<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'nombre');
            $table->string(column: 'apellido');
            $table->integer(column: 'edad');
            $table->integer(column: 'ci');
            $table->string(column: 'direccion');
            $table->string(column: 'telefono');
            $table->integer(column: 'curso_id');
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
        Schema::dropIfExists('alumnos');
    }
};
