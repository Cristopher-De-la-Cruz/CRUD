<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function Get()
    {
        $usuarios = Usuario::get()->where('estado_registro', 'A');
        return $usuarios;
    }
}
