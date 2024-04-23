<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function mostrarPerfil()
    {
        $usuario = auth()->user();
        return view('perfil', compact('usuario'));
    }
}
