<?php
  include("../viws/header.php");
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
include("footer.php");
?>