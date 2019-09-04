<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('cliente_id');
            $table->string('cliente_nome',60);
            $table->string('cliente_cpf',11);
            $table->integer('cliente_numero');
            $table->string('cliente_endereco',200);
            $table->string('cliente_bairro',60);
            $table->string('cliente_cidade',60);
            $table->string('cliente_uf',3);
            $table->string('cliente_telefone',11);
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
        Schema::dropIfExists('cliente');
    }
}
