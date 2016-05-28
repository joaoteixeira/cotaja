<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categorias';

    protected $fillable= ['nome'];
    
    protected $hidden= ['id', 'created_at', 'updated_at'];
    
    public function Produtos(){
        return $this->hasMany('App\Produto');
    }
}
