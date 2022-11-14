<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargas extends Model
{
    use HasFactory;

    protected $fillable = [
        'grupo', 'grado', 'nivel', 'periodo', 'docente', 'asignatura', 'bimestre', 'alumnos' ];
 

    protected $table = "cargas";
    protected $primaryKey = "id";
    
  


}
