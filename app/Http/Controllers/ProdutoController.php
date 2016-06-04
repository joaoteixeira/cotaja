<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Marca;
use App\Produto;
use Illuminate\Http\Request;
use App\Http\Requests;


class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        
        return view('produto.index', ['produtos' => $produtos]);
    }
    
    public function create()
    {
        $marcas     = Marca::all();
        $categorias = Categoria::all();

        return view('produto.cadastro', [ 'marcas' => $marcas, 'categorias' => $categorias ]);
    }

    public function store(Request $request)
    {

        Produto::create([
            'nome'      => $request['nome'],
            'marca_id' => $request['marca_id'],
            'categoria_id' => $request['categoria_id']
        ]);

        return redirect('/produtos');
    }

    public function edit($id)
    {
        $produtos = Produto::findOrFail($id);
        $marcas = Marca::all();
        $categorias = Categoria::all();

        return view('produto.edita', array('produto' => $produtos, 'marcas' => $marcas, 'categorias' => $categorias));
    }


    public function update(Request $request, $id)
    {
        $produtos = Produto::findOrFail($id);
        $input = $request->all();
        $produtos->fill($input)->save();
        return redirect('/produtos');
    }

    public function destroy($id)
        {
            $produtos = Produto::findOrFail($id);
            $produtos->delete();
            return redirect('/produtos');
        }

}
