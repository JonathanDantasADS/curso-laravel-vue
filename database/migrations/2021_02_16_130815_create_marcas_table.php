<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 30)->unique();
            $table->string('imagem', 100)->comment('Logo da marca');
            $table->timestamps();
            $table->string('nome', 50);
            $table->string('telefone', 14);
            $table->string('email', 40);
            $table->integer('motivo_contato');
            $table->text('mensagem'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
