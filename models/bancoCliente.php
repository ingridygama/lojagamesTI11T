<?php
function inserirCliente($conexao,$codigoUsuFk,$nomeCliente, $cpfCliente,$foneCliente,$dataNascCliente){
   
    $query="insert into tbclientes( codUsuFK,nomeCli,cpfCli,foneCli,datanasCli)values('{$codigoUsuFk}','{$nomeCliente}','{$cpfCliente}''{$foneCliente}','{$dataNascCliente}')";
    
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
    }

function listadecliente($conexao){
        $query = "Select * From tbclientes";
    
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }

function deletarcliente($conexao, $codCli){
        $query="delete from tbclientes where codCli = $codCli";
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }

function alterarcliente($conexao,$codCli,$codigoUsuFk,$nomeCliente, $cpfCliente,$foneCliente,$dataNascCliente){
        $query= "update tbclientes set codCli= '{$codCli}', codUsuFK= '{$codigoUsuFk}', nomeCli = '{$nomeCliente}', cpfCli ='{$cpfCliente}', foneCli = '{$foneCliente}', datanasCli = '{$dataNascCliente}' where codCli = '{$codCli}'";
        $resultados = mysqli_query ($conexao, $query);
        return $resultados;
        }
          

        function listadeclienteCod($conexao,$codCliente){
            $query = "Select * from tbclientes where codCli ={$codCliente}";
            $resultados = mysqli_query($conexao,$query);
            $resul = mysqli_fetch_array($resultados);
            return $resul;
         }

?>
