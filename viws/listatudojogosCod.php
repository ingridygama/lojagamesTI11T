<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoJogos.php");
?>
<div class="container m-5 p-5">
<form action="listatudojogosCod.php" method="GET">
<div class="row mb-3">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Dígite o código do jogo:</label>
    <div class="col-sm-3">
      <input type="number" required name="codJog" class="form-control" id="inputCodigo">
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
      <th scope="col">Jogo</th>
      <th scope="col">Console</th>
      <th scope="col">Preço</th>
      <th scope="col">Deletar JOGO</th>
      <th scope="col">Alterar JOGO
    </tr>
  </thead>
  <tbody>
<?php
$codJogo = isset($_GET['codJog'])?$_GET['codJog']:0;
if($codJogo > 0){
  $jogo = listatudojogosCod($conexao,$codJogo);


$jogos = listatudojogosCod($conexao,$codJogo);
if ($jogos){
?>
    <tr>
      <td scope="row"><?=$jogos['codJog']?></td>
      <td><?=$jogos['nomeJog']?></td>
      <td><?=$jogos['consoleJog']?></td>
      <td><?=$jogos['precoJog']?></td>
<td>
      <form action="../controllers/deletarjogos.php" method="Post">
      <input type="hidden" name= "codJogdeletar" value="<?=$jogo['codJog']?>">
       <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </td>
      <td>
      <form action="formAlterar.php" method="Post">
      <input type="hidden" name= "codJogAlterar" value="<?=$jogo['codJog']?>">
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



<?php

include_once("footer.php");
?>