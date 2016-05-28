<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table='Marcas';

    protected $fillable= ['nome'];

    protected $hidden= ['id', 'created_at', 'updated_at'];

    public function Produtos(){
        return $this->hasMany('App\Produto');
    }
}
