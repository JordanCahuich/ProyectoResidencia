<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesoresTable extends Migration
{

    
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->nullable();
            $table->string('nombre',150)->nullable();
            $table->string('fecha_nacimiento',30)->nullable();
            $table->string('edad',20)->nullable();
            $table->string('genero',20)->nullable();
            $table->string('email')->nullable();
            $table->string('telefono',20)->nullable();
            $table->string('localidad',150)->nullable();
            $table->string('domicilio',20)->nullable();
            

            
            /*Creando relacion version 8 de Laravel */
            $table->foreignId('curso_id')
                ->nullable()
                ->constrained('cursos')
                ->onDelete('set null');
          
            /*
             $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            */

            /*
                $table->unsignedBigInteger('sub_category_id');
                $table->foreign('sub_category_id')
                ->references('id')
                ->on('sub_categories')
                ->onDelete('cascade');
            */

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}