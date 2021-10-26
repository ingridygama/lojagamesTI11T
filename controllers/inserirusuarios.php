<?php

include("../models/conexao.php");
include("../models/bancousuarios.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);


if(cadastrousuario($conexao,$emailUsuarios,$senhaUsuarios,$pinUsu)){
echo("Usuário cadastrado com SUCESSO.");
}else{
    echo("Usuário não cadastrado.");
}
include("../viws/footer.php");
?>