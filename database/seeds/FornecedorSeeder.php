<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;


class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Jonathan100';
        $fornecedor->site = 'jonathan100.com.br';
        $fornecedor->uf= 'RN';
        $fornecedor->email = 'jonathan100@gmail.com.br';
        $fornecedor->save();

        // O método create() de Fornecedor que recebe de model
        //Obs: Atenção no fillable da classe se possui os atributos
        Fornecedor::create([
            'nome' => 'Jonathan 200',
            'site' => 'jonathan200.com.br',
            'uf' => 'SP',
            'email' => 'jonathan200@gmail.com.br', 
        ]);

        //Insert
        DB::table('fornecedores')->insert([
            'nome' => 'Jonathan 300',
            'site' => 'jonathan300.com.br',
            'uf' => 'RJ',
            'email' => 'jonathan300@gmail.com.br'
        ]);
        
    }
}
