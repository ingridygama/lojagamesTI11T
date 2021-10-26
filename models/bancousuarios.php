<?php
function cadastrousuario($conexao,$emailUsuarios,$senhaUsuarios, $pinUsu){
    $option = ['cost' => 8];
    $senhacrypto = password_hash($senhaUsuarios, PASSWORD_BCRYPT, $option);
    $query="insert into tbusuario(emailUsu,senhaUsu,pinUsu)values('{$emailUsuarios}','{$senhacrypto}','{$pinUsu}')";
    
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

function alterarUsuarios($conexao,$codUsu,$emailUsu,$senhaUsu,$pinUsu){
    $option = ['cost' => 8];
    $senhaUsu = password_hash($senhaUsu, PASSWORD_BCRYPT, $option);
        $query= "update tbusuario set emailUsu= '{$emailUsu}', senhaUsu= '{$senhaUsu}', pinUsu= '{$pinUsu}' where codUsu = '{$codUsu}'";
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

