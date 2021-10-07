<?php

include("../models/conexao.php");
include("../models/bancoJogos.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(deletarJogos($conexao,$codJogdeletar)){
echo("Jogo deletado com SUCESSO.");
}else{
    echo("Jogo não deletado.");
}
include("../viws/footer.php");