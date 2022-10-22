<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grados extends Model
{
    use HasFactory;
    protected $fillable = ['numero'];

    public function periodo(){
        return $this->belongsTo(Periodos::class);
    }
}
