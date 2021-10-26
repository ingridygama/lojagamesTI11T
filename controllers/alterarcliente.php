<?php


include("../models/conexao.php");
include("../models/bancousuarios.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(alterarcliente($conexao,$codCli,$codigoUsuFk,$nomeCliente, $cpfCliente,$foneCliente,$dataNascCliente)){
echo("Cliente alterado com SUCESSO");
}else{
    echo("Cliente não alterado.");
}
include("../viws/footer.php");