<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

use App\Http\Requests;

class MarcaController extends Controller
{

    public function index()
    {
        $marcas = Marca::all();

        return view('marca.index', ['marcas' => $marcas]);
    }
    
    public function create()
    {
        return view('marca.cadastro');
    }

    public function store(Request $request)
    {

        Marca::create([
            'nome'      => $request['nome']
        ]);

        return redirect('/marcas');
    }

    public function show( $id)
    {
        return redirect('/marcas');

    }

    public function edit($id)
    {
        $marcas = Marca::findOrFail($id);
        return view('marca.edita', array('marca' => $marcas));
    }


    public function update(Request $request, $id)
    {
        $marcas = Marca::findOrFail($id);
        $input = $request->all();
        $marcas->fill($input)->save();
        return redirect('/marcas');
    }

    public function destroy($id)
    {
        $marcas = Marca::findOrFail($id);
        $marcas->delete();
        return redirect('/marcas');
    }
}
