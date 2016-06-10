<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('categoria.index', ['categorias' => $categorias]);
    }

    public function create()
    {
        return view('categoria.cadastro');
    }

    public function store(Request $request)
    {

        Categoria::create([
            'nome'      => $request['nome']
        ]);

        return redirect('/categorias');
    }

    public function show($id)
    {
        return redirect('/categorias');

    }

    public function edit($id)
    {
        $categorias = Categoria::findOrFail($id);
        return view('categoria.edita', array('categoria' => $categorias));
    }


    public function update(Request $request, $id)
    {
        $categorias = Categoria::findOrFail($id);
        $input = $request->all();
        $categorias->fill($input)->save();
        return redirect('/categorias');
    }

    public function destroy($id)
    {
        $categorias = Categoria::findOrFail($id);
        $categorias->delete();
        return redirect('/categorias');
    }
}
