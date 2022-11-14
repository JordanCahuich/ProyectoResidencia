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
        'nombre', 'primer_apellido','segundo_apellido','sexo','fecha_nacimiento','curp','edad','tipo_sangre','nivel_escolar','grado','grupo','periodo_escolar','domicilio','nombre_emergencia','tel_emergencia','persona_autorizada','parentesco','tel1_autorizada','tel2_autorizada','domicilio_autorizada','persona_autorizada2','parentesco2','tel1_autorizada2','tel2_autorizada2','domicilio_autorizada2','foto_estudiante','observ','profesor_id'
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
            return $query->where('id','like',"%$ids%");
        }
    }
    public function scopeNombres($query, $nombres) {
        if ($nombres) {
            return $query->where('nombre','like',"%$nombres%");
        }
    }
    public function scopeGrados($query, $grados) {
        if ($grados) {
            return $query->where('grado_escolar','like',"%$grados%");
        }
    }   
}