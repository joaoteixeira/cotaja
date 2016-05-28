<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaCompraProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listaCompra_produto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produtos_id')-> unsigned();
            $table->foreign('produtos_id')->references('id')->on('produtos');
            $table->integer('listaCompra_id')-> unsigned();
            $table->foreign('listaCompra_id')->references('id')->on('listacompras');
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
        Schema::drop('listaCompra_produto');
    }
}
