<?php


include("../models/conexao.php");
include("../models/bancousuarios.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(alterarUsuarios($conexao,$codUsu,$emailUsu,$senhaUsu,$pinUsu)){
echo("Usuario alterado com SUCESSO");
}else{
    echo("Usuário não alterado.");
}
include("../viws/footer.php");