<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // criando a tabela filiais
        Schema::create('filiais', function(Blueprint $table){
            $table->id();
            $table->string('filial', 40);
            $table->timestamps();
        });

        // criando a tabela produtosfiliais
        Schema::create('produtos_filiais', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->float('preco_venda', 8, 2)->default(0.01);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);
            $table->timestamps();

            // foreign key (constraints)
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        // Primeiro tira as foreign das tabelas

        // Schema::table('produtos', function (Blueprint $table){

        //     $table->dropForeign('produtos_produto_id_foreign');
        //     $table->dropForeign('filiais_filial_id_foreign');

        //     $table->dropColumn('produto_id');
        //     $table->dropColumn('filial_id');
            
        // });

        // removendo colunas da tabela produtos    

        Schema::dropIfExists('produto_filiais');

        Schema::dropIfExists('filiais');
    }
}
