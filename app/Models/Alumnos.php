<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cursos;
use App\Models\Profesores;

class Alumnos extends Model
{
    use HasFactory;
    protected $table = 'Alumnos'; 
    protected $fillable = [
        'id','nombre', 'primer_apellido','segundo_apellido','sexo','fecha_nacimiento','curp','edad','grado_escolar','observ','curso_id','profesor_id'
    ];

    /** un alumno puede tener mas de 1 curso*/
    public function curso(){
        return $this->belongsTo(Cursos::class);
    }

    public function profesor(){
        return $this->belongsTo(Profesores::class);
    }
    public function scopeIds($query, $ids) {
        if ($ids) {
            return $query->with('id','LIKE',"%$ids%");
        }else{

        }
    }
    public function scopeNombres($query, $nombres) {
        if ($nombres) {
            return $query->with('nombre','LIKE',"%$nombres%");
        }else{
            
        }
    }

    public function scopeGrados($query, $grados) {
        if ($grados) {
            return $query->with('grado_escolar','LIKE',"%$grados%");
        }else{
            
        }
    }
}
