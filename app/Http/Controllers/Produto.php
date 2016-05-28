<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Marca;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

class Produto extends Controller
{
    public function create(){
        $marcas = DB::select('select * from marcas');
       // $categorias = DB::select('select * from categorias');

        return view('produto.cadastro', compact($marcas));
    }

    public function store(Request $request, $marca, $categoria){
        \App\Produto::create([
            'nome' => $request['nome'],
            'marca_id' => $request[$marca->id],
            'categoria_id' => $request[$categoria->id]
        ]);

        return redirect(produto.cadastro);
    }
}
