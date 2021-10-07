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
    <button type="submit" class="btn btn-primary">Buscar</button>
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
    </tr>
  </thead>
  <tbody>
<?php
$codJogo = isset($_GET['codJog'])?$_GET['codJog']:0;
if($codJogo > 0){
  $jogo = listatudojogosCod($conexao,$codJogo);


$jogos = listatudojogosCod($conexao,$codJogo);

?>
    <tr>
      <td scope="row"><?=$jogos['codJog']?></td>
      <td><?=$jogos['nomeJog']?></td>
      <td><?=$jogos['consoleJog']?></td>
      <td><?=$jogos['precoJog']?></td>
    </tr>
<?php
}
?>
  </tbody>
</table>



<?php

include_once("footer.php");
?>