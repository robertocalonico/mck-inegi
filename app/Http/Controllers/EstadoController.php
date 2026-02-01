<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = \App\Models\Estado::orderBy('cvegeo')->get();
        return view('estados.index', compact('estados'));
    }

    public function show(\App\Models\Estado $estado)
    {
        return view('estados.show', compact('estado'));
    }
}
