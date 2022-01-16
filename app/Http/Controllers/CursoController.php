<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "Bienbenidos a la pagina cursos";
    }
    public function create()
    {
        return "en esta pagina podras crear cursos";
    }
    public function show($curso)
    {
        return "bienvenidos al curso:  $curso ";
    }
}
