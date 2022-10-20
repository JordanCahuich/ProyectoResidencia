<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{

    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',150)->nullable();
            $table->string('primer_apellido',50)->nullable();
            $table->string('segundo_apellido',250)->nullable();
            $table->string('sexo',250)->nullable();
            $table->string('fecha_nacimiento',50)->nullable();
            $table->string('curp',250)->nullable();
            $table->string('edad')->nullable();
            $table->string('grado_escolar', 150)->nullable();
            $table->text('observ')->nullable();
    

            
         

            $table->foreignId('profesor_id')
                ->nullable()
                ->constrained('profesores')
                ->onDelete('set null');     

                
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
