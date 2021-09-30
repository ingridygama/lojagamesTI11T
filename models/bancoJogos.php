<?php

function inserirJogo($conexao,$jogo,$tamjog,$precojog,$reqjog,$conjog,$classjog,$avajog){

    $query="insert into tbjogos(nomeJog,tamanhoJog,precoJog,requisitosJog,consoleJog,classificacaoJog,avaliacaoJog)values('{$jogo}','{$tamjog}','{$precojog}','{$reqjog}','{$conjog}','{$classjog}','{$avajog}')";

    $resultados = mysqli_query($conexao,$query);

    return $resultados;
}

function listatudojogos($conexao){
    $query = "select * From tbjogos";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listatudojogosCod($conexao,$codJogo){
   $query = "select * From tbjogos where codJog={$codJogo}";
   $resultados = mysqli_query($conexao,$codJogo);
   return $resultados;
   
}