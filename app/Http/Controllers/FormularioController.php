<?php

namespace App\Http\Controllers;

use App\Models\prueba;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
    {
        $prueba = prueba::paginate();

        return view('pruebas.index', compact('prueba'));
    }

    public function create()
    {
        return view('pruebas.create');
    }

    public function store(Request $request)
    {
        $prueba = new prueba();

        $prueba->name = $request->nombre;
        $prueba->lastname = $request->apellidos;
        $prueba->descripcion = $request->descripcion;
        $prueba->telefono = $request->telefono;
        $prueba->email = $request->email;

        $prueba->save();

        return redirect()->route('pruebas.index', $prueba);
    }

    public function show()
    {

        $prueba = prueba::find();

        return view('pruebas.show', compact('prueba'));
    }

    public function edit()
    {
        return view('pruebas.edit');
    }
}
