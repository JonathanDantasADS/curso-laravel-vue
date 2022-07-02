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


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>

    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
        - Vazio
        @endempty
    @endisset
@endisset