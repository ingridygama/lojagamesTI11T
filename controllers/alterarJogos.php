<?php

include("../models/conexao.php");
include("../models/bancoJogos.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(alterarJogos($conexao,$codJog,$nomeJog,$tamanhoJog,$precoJog,$requisitosJog,$consoleJog,$classificacaoJog,$avaliacaoJog)){
echo("Jogo alterado com SUCESSO.");
}else{
    echo("Jogo não alterado.");
}
include("../viws/footer.php");
