<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Site_Contato
//site_contato
//site_contatos

class SiteContato extends Model
{
    protected $table = 'site_contatos';
    protected $fillable = [
                            'nome', 
                            'telefone', 
                            'motivo_contato', 
                            'mensagem'
];

}
