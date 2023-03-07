<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Horarios extends Model
{
    use HasFactory;

        protected $fillable = [
       'nombre','aula', 'dia', 'hora', 'grupo_id', 'grado_id', 'docente_id', 'asignatura_id' 
    ];


    protected $table = "horarios";
    protected $primaryKey = "id";

    public function grupos(): BelongsTo
    {
        return $this->belongsTo(Grupos::class, 'grupo_id');
    }


    public function grados(): BelongsTo
    {
        return $this->belongsTo(Grados::class, 'grado_id');
    }


    public function asignaturas(): BelongsTo
    {
        return $this->belongsTo(Asignaturas::class, 'asignatura_id');
    }

    public function profesores(): BelongsTo
    {
        return $this->belongsTo(Profesores::class, 'docente_id');
    }

    public function getDiaAttribute()
    {
        $val = "-";
        if($this->dia==1)
            $val ="Lunes";
        else if($this->dia==2)
            $val ="Martes";
        else if($this->dia==3)
            $val ="Miércoles";
        else if($this->dia==4)
            $val ="Jueves";
        else if($this->dia==5)
            $val ="Viernes";
        else
            $val ="Sábado";

        return $val;
    }


}
