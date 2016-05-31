<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supermercado extends Model
{
    protected $table = 'supermercados';

    protected $fillable = [ 'nome' ];

    protected $hidden = [ 'id', 'created_at', 'updated_at' ];

    public function produtos()
    {
        return $this->belongsToMany('App\Produto')->withPivot('valor', 'quantidade');
    }
}
