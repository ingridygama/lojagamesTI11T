<?php

include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoJogos.php");
?>
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
$jogos = listatudojogos($conexao);
foreach($jogos as $jogo):
?>
    <tr>
      <th scope="row"><?=$jogo['codJog']?></th>
      <td><?=$jogo['nomeJog']?></td>
      <td><?=$jogo['consoleJog']?></td>
      <td><?=$jogo['precoJog']?></td>
    </tr>
<?php
endforeach;
?>
  </tbody>
</table>



<?php

include_once("footer.php");
?>