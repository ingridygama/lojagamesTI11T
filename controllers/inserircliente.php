<?php

include("../models/conexao.php");
include("../models/bancoCliente.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(inserirCliente($conexao,$codigoUsuFk,$nomeCliente,$cpfCliente,$telCliente,$datanasCliente)){
echo("Cliente cadastrado com SUCESSO.");
}else{
    echo("Cliente não cadastrado.");
}
include("../viws/footer.php");
?>