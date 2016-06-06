<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [ 'nome', 'categoria_id', 'marca_id' ];

    protected $hidden = [ 'id', 'created_at', 'updated_at' ];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categoria_id','id');
    }

    public function marca()
    {
        return $this->belongsTo('App\Marca','marca_id','id');
    }

    public function supermercados()
    {
        return $this->belongsToMany('App\Supermercado')->withPivot('valor', 'quantidade');
    }

    public function ListaCompras()
    {
        return $this->belongsToMany('App\ListaCompra')->withTimestamps();
    }
}
