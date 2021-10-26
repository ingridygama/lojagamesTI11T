<?php
  include_once("header.php");
  include_once("../models/conexao.php");
  include_once("../models/bancousuarios.php");

?>
    <form method="POST" action="../controllers/alterarusuario.php">

<?php
$codCliente = $_POST["codclientealterar"];
$cliente = listadeclienteCod ($conexao,$codCliente);

?>

<br>
<style>
.card-title{
   text-align: center;
}
.tudo{
  background:seagreen;
}

</style>
<div class="tudo">
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title"><b>Modificar Cliente</h5>
    <div class="card w-75 p-4">
    <p class="card-center"> 
    <form action="../controllers/alterarusuario.php" method="POST">
    <p>Código <input type="text" name="codUsu" value="<?=$usuario['codUsu']?>"></p>
    <p>E-mail <input type="text" name="emailUsu" value="<?=$usuario['emailUsu']?>"></p>
    <p>Senha<input type= "text" name="senhaUsu" value="<?=$usuario['senhaUsu']?>"></p>
    <p>PIN<input type= "text" name="pinUsu" value="<?=$usuario['pinUsu']?>"></p>
    
 
    <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
</div>
</form>


<?php
include("footer.php");
?>