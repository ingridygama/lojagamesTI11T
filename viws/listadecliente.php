<?php

include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoCliente.php");
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF:</th>
       <th scope="col">Data de Nascimento:</th>
       <th scope="col">Telefone:</th>
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
<?php

$clientes = listadecliente ($conexao);
foreach($clientes as $cliente):

?>
    <tr>
      <th scope="row"><?=$u['codCli']?></th>
      <td><?=$cliente['codUsuFK']?></td>
      <td><?=$cliente['nomeCli']?></td>
      <td><?=$cliente['cpfCli']?></td>
      <td><?=$cliente['foneCli']?></td>
      <td><?=$cliente['datanasCli']?></td>
      <td>
      <form action="../controllers/deletarcliente.php" method="Post">
      <input type="hidden" name= "codclientedeletar" value="<?=$cliente['codCli']?>">
       <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </td>
      <td>
      <form action="../viws/formalterarusu.php" method="Post">
      <input type="hidden" name= "codclientealterar" value="<?=$cliente['codCli']?>">
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