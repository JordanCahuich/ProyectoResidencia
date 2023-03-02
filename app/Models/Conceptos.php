<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Conceptos extends Model
{
    use HasFactory;
    protected $table = 'Conceptos'; 
    protected $fillable = [
        'id','nombre', 'monto','fecha'
    ];

    public function pagos(): BelongsToMany
    {
        return $this->belongsToMany(Pago::class);
    }
}
