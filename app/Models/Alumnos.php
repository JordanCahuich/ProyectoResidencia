<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cursos;
use App\Models\Profesores;

class Alumnos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'primer_apellido','segundo_apellido','sexo','fecha_nacimiento','curp','edad','grado_escolar','observ','curso_id','profesor_id'
    ];

    /** un alumno puede tener mas de 1 curso*/
    public function curso(){
        return $this->belongsTo(Cursos::class);
    }

    public function profesor(){
        return $this->belongsTo(Profesores::class);
    }

}
