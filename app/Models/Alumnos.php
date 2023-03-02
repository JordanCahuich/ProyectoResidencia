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
        'nombre', 'primer_apellido','segundo_apellido','sexo','fecha_nacimiento','curp','edad','tipo_sangre','nivel_escolar','grado','grupo','periodo_escolar','nombre_tutor','parentesco','tutor_principal','direccion','colonia','telefono_contacto','nombre_emergencia','parentesco2','tel1_autorizada','foto_estudiante','profesor_id'


    ];
    protected $table = "alumnos";
    protected $primaryKey = "id";

    public function Pagos()
    {
        return $this->hasMany('App\Pago');
    }
    


}
