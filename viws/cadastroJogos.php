<?php
  include("../viws/header.php");
?>
    <form method="POST" action="../controllers/inserirjogos.php">

     <p>Jogo <input type="text" name="jogo"></p>
     <p>Tamanho do jogo <input type= "text" name="tamjog"></p>
     <p>Preço do jogo <input type= "text" name="precojog"></p>
     <p>Requisitos <input type="text" name="reqjog"></p>
     <p>Console <input type="text" name="conjog"></p>
     <p>Classificação <input type="text" name="classjog"></p>
     <p>Avaliação <input type="text" name="avajog"></p>
     <button type="submit">Salvar</button>
</form>
<?php
include("footer.php");
?>