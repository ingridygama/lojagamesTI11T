<?php

include("../models/conexao.php");
include("../models/bancoJogos.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(inserirJogo($conexao,$jogo,$tamjog,$precojog,$reqjog,$conjog,$classjog,$avajog)){
echo("Jogo cadastrado com SUCESSO.");
}else{
    echo("Jogo não cadastrado.");
}
include("../viws/footer.php");