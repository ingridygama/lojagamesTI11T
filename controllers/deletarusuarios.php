<?php

include("../models/conexao.php");
include("../models/bancousuarios.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(deletarusuarios($conexao, $codusuariodeletar)){
echo("Usuario deletado com SUCESSO.");
}else{
    echo("Usuário não deletado.");
}
include("../viws/footer.php");