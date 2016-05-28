<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\Console\Input\Input;

class Produto extends Controller
{
    public function getCadastrar(){
        return view::make('produto.cadastrar');
    }

    public function postCadastrar(){
        $produto = new Produto();
        $produto->nome = Input::get('nome');
        $produto->
    }
}
