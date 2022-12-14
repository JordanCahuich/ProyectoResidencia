<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conceptos extends Model
{
    use HasFactory;
    protected $table = 'Conceptos'; 
    protected $fillable = [
        'id','nombre', 'monto','fecha'
    ];
}
