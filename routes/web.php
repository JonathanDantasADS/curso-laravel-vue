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
    
    Route::get('/', 'PrincipalController@principal')->name('site.index');
    Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
    Route::get('/contato', 'ContatoController@contato')->name('site.contato');
    
    Route::get('/login', function(){
        return 'Login';
    })->name('site.login');

    // Rotas agrupadas
    Route::prefix('/app')->group(function(){

*/


Route::get('/', function () {
    return view('welcome');
});
        Route::get('/clientes', function(){
            return 'Clientes';
        })->name('app.clientes');
        
        Route::get('/fornecedores', function(){
            return 'Fornecedores';
        })->name('app.fornecedores');

        Route::get('/produtos', function(){
            return 'Produtos';
        })->name('app.produtos');
    });

    Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('teste');

    
    // Rota de fallback, página personalizada caso o usuário digite o endereço errado
    Route::fallback(function(){
        echo 'A rota acessada não existe. 
        <a href="'.route('site.index').'">Clique Aqui</a> 
        para ir para a página inicial';
    });
=======
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/marcas', function() {
    return view('app.marcas');
})->name('marcas')->middleware('auth');