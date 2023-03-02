<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pago extends Model
{
    protected $table = 'pagos'; // a que tabla de la base de datos se hace referencia
    protected $primaryKey = 'id';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     *
     * @var array
     */
    protected $fillable = [
        'nombre','fecha', 'alumno_id','vigencia','importetotal','status','tipo','photo_pago'
    ];
    public function disease()
    {
        return $this->belongsTo('App\Disease');
    }
    public function scopeMatriculas($query, $id) {
        if ($nombres) {
            return $query->where('id','like',"%id%");
        }
    }

    public function alumnos()
    {
        return $this->belongsTo('App\Models\Alumnos','alumno_id');
    }

    public function conceptos(): BelongsToMany
    {
        return $this->belongsToMany(conceptos::class);
    }

}

