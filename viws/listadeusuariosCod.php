<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancousuarios.php");
?>
<div class="container m-5 p-5">
<form action="listadeusuariosCod.php" method="GET">
<div class="row mb-3">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Dígite o código do usuário:</label>
    <div class="col-sm-3">
      <input type="number" required name="codUsu" class="form-control" id="inputCodigo">
    </div>
    <div class="col-sm-3">
    <button type="submit" class="btn btn-success">Buscar</button>
    <br>
    <br>
    <br>
  </div>

</form>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Deletar Usuário</th>
      <th scope="col">Alterar Usuário</th>
    </tr>
  </thead>
  <tbody>
<?php
$codUsuario = isset($_GET['codUsu'])?$_GET['codUsu']:0;
if($codUsuario > 0){
  $usuarios = listadeusuariosCod($conexao,$codUsuario);
 

$usuario = listadeusuariosCod($conexao,$codUsuario);
if ($usuario){
?>
    <tr>
      <th scope="row"><?=$usuario['codUsu']?></th>
      <td><?=$usuario['emailUsu']?></td>
      <td><?=$usuario['senhaUsu']?></td>
      <td>
      <form action="../controllers/deletarusuarios.php" method="Post">
      <input type="hidden" name= "codusuariodeletar" value="<?=$usuarios['codUsu']?>">
       <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </td>
      <td>
      <form action="../viws/formalterarusu.php" method="Post">
      <input type="hidden" name= "codusuarioalterar" value="<?=$usuarios['codUsu']?>">
       <button type="submit" class="btn btn-success">Alterar</button>
      </form>
      </td>
    </tr>
<?php
}
}
?>
  </tbody>
</table>


<!--  -->
<?php

include_once("footer.php");
?>