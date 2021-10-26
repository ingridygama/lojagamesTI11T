<?php

include("../models/conexao.php");
include("../models/bancousuarios.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(deletarcliente($conexao, $codusuariodeletar)){
echo("Cliente deletado com SUCESSO.");
}else{
    echo("Cliente não deletado.");
}
include("../viws/footer.php");