<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
    //     $contato = new SiteContato();
    //     $contato->nome = 'Novo Usuário';
    //     $contato->telefone = '(11)96831-7988';
    //     $contato->email = 'jonathandantas@gmail.com';
    //     $contato->motivo_contato = 2;
    //     $contato->mensagem = 'Essa mensagem é de teste';
    //     $contato->save();

        SiteContato::create([
            'nome' => 'Novo Usuário1',
            'telefone' => '(11)96831-7989',
            'email' => 'jonathannazareno@gmail.com',
            'motivo_contato' => 1,
            'mensagem' => 'Essa mensagem é de teste 2',
        ]);

        DB::table('site_contatos')->insert([
            'nome' => 'Novo Usuário2',
            'telefone' => '(11)96831-7999',
            'email' => 'jonathanrocha@gmail.com',
            'motivo_contato' => 2,
            'mensagem' => 'Essa mensagem é de teste 3',
        ]);

        factory(SiteContato::class, 100)->create();
    }
}
