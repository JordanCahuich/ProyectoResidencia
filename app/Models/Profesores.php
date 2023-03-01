<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesores extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'nombre','fecha_nacimiento', 'edad', 'genero', 'email', 
        'telefono', 'localidad', 'domicilio',  'curso_id'
    ];

    protected $table = "profesores";
    protected $primaryKey = "id";



    public function cargas(): HasMany
    {
        return $this->hasMany(Cargas::class);
    }

}