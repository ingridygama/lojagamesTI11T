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
    <h5 class="card-title"><b>CADASTRO</h5>
    <br>
    <form method="POST" action="../controllers/inserirusuarios.php">
    <div class="card w-75 p-4">
    <p class="card-center">
    <p>Emal <input type="email" name="emailUsuarios"></p>
    <p>Senha: <input type= "password" name="senhaUsuarios"></p>
   <button type="submit" class="btn btn-success">Salvar</button>
</div>
</div>
<br>
<br>
</form>

<?php
include("footer.php");
?>