<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = ['mascota_id', 'veterinario_id', 'fecha_hora', 'motivo'];

    public function mascota(){
        return $this->belongsTo(Mascota::class);
    }

    public function veterinario(){
        return $this->belongsTo(veterinario::class);
    }

    public function tratamientos(){
        return $this->hasMany(Tratamiento::class);
    }
}
