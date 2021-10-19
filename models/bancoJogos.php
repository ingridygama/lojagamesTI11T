<?php

function inserirJogo($conexao,$jogo,$tamjog,$precojog,$reqjog,$conjog,$classjog,$avajog){

    $query="insert into tbjogos(nomeJog,tamanhoJog,precoJog,requisitosJog,consoleJog,classificacaoJog,avaliacaoJog)values('{$jogo}','{$tamjog}','{$precojog}','{$reqjog}','{$conjog}','{$classjog}','{$avajog}')";

    $resultados = mysqli_query($conexao,$query);

    return $resultados;
}

function listatudojogos($conexao){
    $query = "Select * From tbjogos";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listatudojogosCod($conexao,$codJogo){
   $query = "Select * from tbjogos where codJog={$codJogo}";
   $resultados = mysqli_query($conexao,$query);
   $resul = mysqli_fetch_array($resultados);
   return $resul;
}

function alterarJogos($conexao,$codJog,$nomeJog,$tamanhoJog,$precoJog,$requisitosJog,$consoleJog,$classificacaoJog,$avaliacaoJog){
var_dump($nomeJog);
$query= "update tbjogos set nomeJog= '{$nomeJog}', tamanhoJog= '{$tamanhoJog}', precoJog= '{$precoJog}', requisitosJog = '{$requisitosJog}', consoleJog = '{$consoleJog}', classificacaoJog = '{$classificacaoJog}', avaliacaoJog = '{$avaliacaoJog}' where codJog = '{$codJog}'";
$resultados = mysqli_query ($conexao, $query);
return $resultados;
}


function deletarJogos($conexao,$codJog){
    $query="delete from tbjogos where codJog = $codJog";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}
