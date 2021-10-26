<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoCliente.php");
?>
<div class="container m-5 p-5">
<form action="listadecliente.php" method="POST">
<div class="row mb-3">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Dígite o código do cliente:</label>
    <div class="col-sm-3">
      <input type="number" required name="codUsu" class="form-control" id="inputCodigo">
    </div>
    <div class="col-sm-3">
    <button type="submit" class="btn btn-success">Buscar</button>
    <br>
    <br>
    <br>
  </div>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome </th>
      <th scope="col">CPF</th>
      <th scope="col">Data nascimento</th>
      <th scope="col">Telefone</th>
      <th scope="col">Deletar Cliente</th>
      <th scope="col">Alterar Cliente</th>
    </tr>
  </thead>
  <tbody>
<?php
$codCliente = isset($_GET['codCli'])?$_GET['codCli']:0;
if($codCliente > 0){
  $cliente = listadeclienteCod($conexao,$codCli);


$clientes = listadeclienteCod($conexao,$codCli);
if ($clientes){
?>
    <tr>
      <td scope="row"><?=$clientes['codCli']?></td>
      <td><?=$clientes['nomeJog']?></td>
      <td><?=$clientes['consoleJog']?></td>
      <td><?=$clientes['precoJog']?></td>
<td>
      <form action="../controllers/deletarcliente.php" method="Post">
      <input type="hidden" name= "codClideletar" value="<?=$cliente['codCli']?>">
       <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </td>
      <td>
      <form action="formAlterar.php" method="Post">
      <input type="hidden" name= "codClialterar" value="<?=$cliente['codCli']?>">
       <button type="submit" class="btn btn-success">Alterar</button>
      </form>
      </td>
    </tr>
    <?php
}
}
    ?>
<br>
<br>
</form>

  </tbody>
</table>


<?php
include_once("footer.php");
?>