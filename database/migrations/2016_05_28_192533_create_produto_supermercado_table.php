<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoSupermercadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_supermercado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produto_id')-> unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->integer('supermercado_id')-> unsigned();
            $table->foreign('supermercado_id')->references('id')->on('supermercados');
            $table->float('valor');
            $table->integer('quantidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produto_supermercado');
    }
}
