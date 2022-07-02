<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    
    Route::get('/', 'PrincipalController@principal');
    Route::get('/sobre-nos', 'SobreNosController@sobreNos');
    Route::get('/contato', 'ContatoController@contato');
    // Nome, categoria, assunto, mensagem


    Route::get('/contato/{nome}/{inventario}/{desc?}', function(
            string $nome, 
            string $inventario, 
            string $desc = "Mensagem não informada") {

        return "Listagem de diretório $nome / $inventario / $desc ";
    });

/* verbo http

get
post
patch
delete
options
*/