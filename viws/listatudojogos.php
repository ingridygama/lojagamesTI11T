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
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
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
endforeach;
?>
  </tbody>
</table>



<?php

include_once("footer.php");
?>