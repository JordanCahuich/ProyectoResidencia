<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'fecha', 'vigencia','importe_total','status','tipo','photo_pago'
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
    public function pago(){
        return $this->belongsTo(Pago::class);
    }

}

