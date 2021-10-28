?php

    include("../views/header.php");
    include_once("../models/conexao.php");
    include_once("../models/bancoClientes.php");
    include_once("../models/bancoUsuarios.php");

?>  

<br>
<style>
.card-title{
   text-align: center;
   font-size: 100;
   font-style: arial;
   color: seagreen;
}
.tudo{
  background:seagreen;
}

</style>


<div class="container m-5 p-5">

  <form action="../views/cadastroclientes.php" method="POST">

    <div class="row mb-3">

      <label for="inputCodigo" class="col-sm-2 col-form-label">Digite o código do usuario:</label>

      <div class="col-sm-3">

        <input type="number" required name="codUsuario" class="form-control" id="inputCodigo">

      </div>

      <div class="col-sm-3">

        <button type="submit" class="btn btn-primary">Buscar</button>

      </div>

    </div>

  </form>

</div>



<?php 



$codUsuario = isset($_POST['codUsuario'])?$_POST['codUsuario']:0;

$usuario = listaTudoUsuariosCod($conexao,$codUsuario);



if($codUsuario){

  

?>


    







<div class="tudo">
<div class="card w-75">
  <div class="card-body">
    <br>
    <h5 class="card-title"><b>CADASTRO CLIENTE</h5>
    <br>
    <form method="POST" action="../controllers/inserircliente.php">
    <div class="card w-75 p-4">
    <p class="card-center">
    <p>Código: <input type="number" name="codigoUsuFk"></p>
    <p>Nome: <input type= "text" name="nomeCliente"></p>
    <p>CPF: <input type= "text" name="cpfCliente"></p>
    <p>Data de nascimento: <input type= "date" name="datanasCliente"></p>
    <p>Telefone: <input type= "text" name="telCliente"></p>
   <button type="submit" class="btn btn-success">Salvar</button>
</div>
</div>
<br>
<br>
</form>

<?php
}
include("footer.php");
?>