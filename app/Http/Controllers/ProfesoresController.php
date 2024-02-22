<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesores;

class ProfesoresController extends Controller
{
    public function Get()
    {
        $profesores = Profesores::with('usuario')->where('estado_registro', 'A')->get();
        return $profesores;
    }
}
