<?php

namespace App\Http\Controllers;

use App\Supermercado;
use Illuminate\Http\Request;

use App\Http\Requests;

class SupermercadoController extends Controller
{
    public function index()
    {
        $supermercados = Supermercado::all();
        
        return view('supermercado.index', ['supermercados' => $supermercados]);
    }

    public function create()
    {
        return view('supermercado.cadastro');
    }

    public function store(Request $request)
    {

        Supermercado::create([
            'nome'      => $request['nome']
        ]);

        return redirect('/supermercados');
    }

    public function edit($id)
    {
        $supermercados = Supermercado::findOrFail($id);
        return view('supermercado.edita', array('supermercado' => $supermercados));
    }


    public function update(Request $request, $id)
    {
        $supermercados = Supermercado::findOrFail($id);
        $input = $request->all();
        $supermercados->fill($input)->save();
        return redirect('/supermercados');
    }

    public function destroy($id)
    {
        $supermercados = Supermercado::findOrFail($id);
        $supermercados->delete();
        return redirect('/supermercados');
    }
}
