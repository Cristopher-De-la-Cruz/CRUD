<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'dni',
        'foto',
        'fecha_nacimiento',
        'fecha_inicio',
        'gmail',
        'password',
        'estado_registro',
    ];

    protected $hidden = [
        'password'
    ];

    /**
     * Get all of the profesor for the Usuario
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores(): HasMany
    {
        return $this->hasMany(profesores::class, 'usuario_id', 'id');
    }


}
