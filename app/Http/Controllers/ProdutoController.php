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
            'marcas_id' => $request['marca_id'],
            'categorias_id' => $request['categoria_id']
        ]);

        return redirect('/produtos');
    }
}
