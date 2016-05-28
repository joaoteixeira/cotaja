<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table='produtos';

    protected $fillable= ['nome', 'categorias_id', 'marcas_id'];

    protected $hidden= ['id', 'created_at', 'updated_at'];

    public function Categorias(){
        return $this->belongsTo('App\Categoria');
    }
    
    public function Marcas(){
        return $this->belongsTo('App\Marca');
    }
    
    public function Supermercados(){
        return $this->belongsToMany('App\Supermercado')->withPivot('valor', 'quantidade');
    }
    
    public function ListaCompras(){
        return $this->belongsToMany('App\ListaCompra')->withTimestamps();
    }
}
