
<?php
  include_once("header.php");
  include_once("../models/conexao.php");
  include_once("../models/bancoJogos.php");

?>
    <form method="POST" action="../controllers/alterarJogos.php">

<?php
$codJogo = $_POST["codJogAlterar"];
$jogo = listatudojogosCod($conexao,$codJogo);

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
    <form action="../controllers/alterarJogos.php" method="POST">
    <p>Código <input type="text" name="codJog" value="<?=$jogo['codJog']?>"></p>
    <p>Jogo <input type="text" name="nomeJog" value="<?=$jogo['nomeJog']?>"></p>
    <p>Tamanho do jogo <input type= "text" name="tamanhoJog" value="<?=$jogo['tamanhoJog']?>"></p>
     <p>Preço do jogo <input type= "text" name="precoJog" value="<?=$jogo['precoJog']?>"></p>
     <p>Requisitos <input type="text" name="requisitosJog" value="<?=$jogo['requisitosJog']?>"></p>
     <p>Console <input type="text" name="consoleJog" value="<?=$jogo['consoleJog']?>"></p>
     <p>Classificação <input type="text" name="classificacaoJog" value="<?=$jogo['classificacaoJog']?>"></p>
     <p>Avaliação <input type="text" name="avaliacaoJog" value="<?=$jogo['avaliacaoJog']?>"></p>
    <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
</div>


<?php
include("footer.php");
?>