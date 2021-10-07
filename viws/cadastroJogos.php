<?php
  include("../viws/header.php");
?>
    <form method="POST" action="../controllers/inserirjogos.php">
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
    <h5 class="card-title"><b>INSERIR JOGO</h5>
    <br>
    <div class="card w-75 p-4">
    <p class="card-center">
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
<br>
<br>
</form>

<?php
include("footer.php");
?>
 