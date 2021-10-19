<?php

include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancousuarios.php");
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">E-mail</th>
      <th scope="col">Senha</th>
       <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
<?php

$usuarios = listadeusuarios ($conexao);
foreach($usuarios as $usuario):

?>
    <tr>
      <th scope="row"><?=$usuario['codUsu']?></th>
      <td><?=$usuario['emailUsu']?></td>
      <td><?=$usuario['senhaUsu']?></td>
      <td>
      <form action="../controllers/deletarusuarios.php" method="Post">
      <input type="hidden" name= "codusuariodeletar" value="<?=$usuario['codUsu']?>">
       <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </td>
      <td>
      <form action="../viws/formalterarusu.php" method="Post">
      <input type="hidden" name= "codusuarioalterar" value="<?=$usuario['codUsu']?>">
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