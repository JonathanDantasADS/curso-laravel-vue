<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Inicio card de busca -->
            <card-component titulo="Busca de Marcas">

                <template v-slot:conteudo>
                     <div class="form-row">
                        <div class="mb-3 col">
                            <input-container-component
                                titulo="ID"
                                id="inputId"
                                id-help="idHelp"
                                texto-ajuda="(Opcional) Informe o ID da marca"
                            >
                                <input type="number" class="form-control" id="inputId" aria-describedby="idHelp" placeholder="ID">
                            </input-container-component>
                        </div>
                        
                        <div class="mb-3 col">
                            <input-container-component
                                titulo="Nome da marca"
                                id="inputNome"
                                id-help="nomeHelp"
                                texto-ajuda="(Opcional) Informe o nome da marca"
                            >
                                <input type="text" class="form-control" id="inputNome" aria-describedby="nomeHelp" placeholder="Nome da marca">
                            </input-container-component>
                        </div>
                    </div>
                </template>

                <template v-slot:rodape>
                        <button type="submit" class="btn btn-primary btn-sm float-right">Pesquisar</button>
                </template>
            </card-component>
            
            <!-- Fim card de busca -->

            <!-- Inicio do card listagem de marcas -->
            <card-component titulo="Relação de Marcas">

                <template v-slot:conteudo>
                    <table-component></table-component>
                </template>

                <template v-slot:rodape>
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modalMarca">Adicionar</button>
                </template>

            </card-component>
            <!-- Fim do card listagem de marcas -->
        </div>
    </div>
        <modal-component id="modalMarca" titulo="Adicionar Marca">
            <template v-slot:conteudo>

                <div class="form-group">
                    <input-container-component
                        titulo="Nome da marca"
                        id="newNome"
                        id-help="newNomeHelp"
                    >
                        <input type="text" class="form-control" id="newNome" aria-describedby="newNomeHelp" placeholder="Nome da marca">
                    </input-container-component>
                    <br>
                    <input-container-component
                        titulo="Imagem"
                        id="newImagem"
                        id-help="newImagemHelp"
                    >
                        <input type="file" class="form-control-file" id="newImagem" aria-describedby="newImagemHelp" placeholder="Adicione uma imagem.PNG">
                    </input-container-component>
                </div>
            </template>
            <template v-slot:rodape>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </template>
                        
        </modal-component>
</div>
</template>

<script>

</script>
