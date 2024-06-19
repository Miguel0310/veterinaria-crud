<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;

    protected $fillable = ['cita_id', 'descripcion', 'costo'];

    public function cita(){
        return $this->belongsTo(Cita::class);
    }
}
