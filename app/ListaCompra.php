<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaCompra extends Model
{
    protected $table='listacompras';
    
    protected $fillable= ['id','created_at', 'updated_at'];
    
    public function Produtos(){
        return $this->belongsToMany('App\Produto')->withTimestamps();
    }
}
