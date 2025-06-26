<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Categoria;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
 public function create()
    {
        $categorias = Categoria::all();
        return view('materials.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo' => 'required|integer',
            'unidadMedida' => 'required|string',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string',
            'idCategoria' => 'required|exists:categorias,idCategoria'
        ]);

        Material::create($request->only(['codigo', 'unidadMedida', 'descripccion','ubicacion', 'idCategoria']));

        return redirect()->route('materials.create')->with('success', 'Material creado exitosamente');
    }


    
}