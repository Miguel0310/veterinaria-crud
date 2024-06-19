<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'especie', 'raza', 'fecha_nacimiento', 'cliente_id'];

    public function Cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function Citas(){
        return $this->hasMany(Cita::class);
    }
}
