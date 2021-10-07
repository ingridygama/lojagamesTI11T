
<?php
  include("../viws/header.php");
?>
    <form method="POST" action="../controllers/inserirjogos.php">

<?php
$codJogo= $_POST["codJogAlterar"];


?>
<br>
<style>
.card-title{
   text-align: center;
}
.tudo{
  background:seagreen;
}

</style>

<div class="tudo">
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title"><b>Inserir Jogo</h5>
    <div class="card w-75 p-4">
    <p class="card-center"> 
    <form action="../controllers/inserirjogos.php" method="POST">
    <p>Jogo <input type="text" name="jogo"></p>
    <p>Tamanho do jogo <input type= "text" name="tamjog"></p>
     <p>Preço do jogo <input type= "text" name="precojog"></p>
     <p>Requisitos <input type="text" name="reqjog"></p>
     <p>Console <input type="text" name="conjog"></p>
     <p>Classificação <input type="text" name="classjog"></p>
     <p>Avaliação <input type="text" name="avajog"></p>
    <button type="submit" class="btn btn-success">Salvar</button>
</div>
</div>
</form>

<?php
include("footer.php");
?>
 