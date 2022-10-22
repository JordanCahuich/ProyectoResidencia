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
        Schema::create('cargas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre_alumno', 250)->nullable();
            $table->string('nombre_profesor', 250)->nullable();
            $table->string('asignatura', 250)->nullable();
            $table->string('grado', 250)->nullable();

            $table->foreignId('grados_id')
            ->nullable()
            ->constrained('grados')
            ->onDelete('set null');
            
            $table->foreignId('asignaturas_id')
            ->nullable()
            ->constrained('asignaturas')
            ->onDelete('set null');

            $table->foreignId('profesores_id')
            ->nullable()
            ->constrained('profesores')
            ->onDelete('set null');

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
        Schema::dropIfExists('cargas');
    }
};
