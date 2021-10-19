<?php
function cadastrousuario($conexao,$emailUsuarios,$senhaUsuarios){
    $query="insert into tbusuario(emailUsu,senhaUsu)values('{$emailUsuarios}','{$senhaUsuarios}')";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
    }

function listadeusuarios($conexao){
        $query = "Select * From tbusuario";
    
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }

function deletarusuarios($conexao, $codUsuario){
        $query="delete from tbusuario where codUsu = $codUsuario";
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }

function alterarUsuarios($conexao,$codUsu,$emailUsu,$senhaUsu){

        $query= "update tbusuario set emailUsu= '{$emailUsu}', senhaUsu= '{$senhaUsu}' where codUsu = '{$codUsu}'";
        $resultados = mysqli_query ($conexao, $query);
        return $resultados;
        }
          

        function listadeusuariosCod($conexao,$codUsuario){
            $query = "Select * from tbusuario where codUsu={$codUsuario}";
            $resultados = mysqli_query($conexao,$query);
            $resul = mysqli_fetch_array($resultados);
            return $resul;
         }

?>

