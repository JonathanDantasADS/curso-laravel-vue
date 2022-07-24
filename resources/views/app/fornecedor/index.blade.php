<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

{{-- Bloco puro do PHP --}}
@php

 
// {{-- if(empty($variavel)) {} --}} # Retorna true se a variável estiver vazia

/*  - exemplos de vazio -
        - '
        -  0
        -  0.0
        -  '0'
        -  null
        -  false
        -  array()
        -  $var
*/


@endphp

{{-- @unless executa se o retorno for false --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>

@if($fornecedores[0]['status'] == 'N')
    Fornecedor tem status Negativo
@elseif($fornecedores[0]['status'] == 'S')
    Fornecedor tem status Positivo
@else
    Fornecedor não cadastrado
@endif

<br>

@unless($fornecedores[0]['status'] == 'S') 
    Fornecedor tem status Negativo
@endunless
<br>

