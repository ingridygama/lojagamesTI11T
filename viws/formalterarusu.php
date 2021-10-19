
<?php
  include_once("header.php");
  include_once("../models/conexao.php");
  include_once("../models/bancousuarios.php");

?>
    <form method="POST" action="../controllers/alterarusuario.php">

<?php
$codUsuario = $_POST["codusuarioalterar"];
$usuario = listadeusuariosCod ($conexao,$codUsuario);

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
    <h5 class="card-title"><b>Modificar Usuário</h5>
    <div class="card w-75 p-4">
    <p class="card-center"> 
    <form action="../controllers/alterarusuario.php" method="POST">
    <p>Código <input type="text" name="codigo" value="<?=$usuario['codUsu']?>"></p>
    <p>E-mail <input type="text" name="email" value="<?=$usuario['emailUsu']?>"></p>
    <p>Senha<input type= "text" name="senha" value="<?=$usuario['senhaUsu']?>"></p>
 
    <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
</div>
</form>


<?php
include("footer.php");
?>