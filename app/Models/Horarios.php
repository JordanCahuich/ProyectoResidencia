<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    use HasFactory;

        protected $fillable = [
       'nombre','aula'
    ];

    
    protected $table = "horarios";
    protected $primaryKey = "id";
}
