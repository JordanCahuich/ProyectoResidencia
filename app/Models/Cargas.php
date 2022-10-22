<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_alumno', 'nombre_profesor', 'asignatura', 'grado' ];
 

    protected $table = "cargas";
    protected $primaryKey = "id";
    
    public function grado(){
        return $this->belongsTo(Grados::class);
    }

    public function asignatura(){
        return $this->belongsTo(Asignaturas::class);
    }

    public function profesores(){
        return $this->hasMany(Profesores::class);
        
    }


}
