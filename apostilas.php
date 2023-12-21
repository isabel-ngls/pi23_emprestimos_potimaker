<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include 'bases/head.php' ;
require 'config.php';
session_start();
if(!isset($_SESSION["matricula"])){
  header("Location:index.php");
}

?>

<title>PotiEmpresta</title>
<style>
      body{
        background-color: #BEDCEF;
      }

    .criar input[type="submit"]{
    width: 100%;
    height: 47px;
    background: #5EA0C5;
    border-radius: 20px;
    outline: none;
    border: none;
    margin-top: 15px;
    color: white;
    cursor: pointer;
    font-size: 16px;
    font-family: 'Lexend', sans-serif;
    text-transform: uppercase;
    font-weight: bold;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

input[type="submit"]:hover {
    background-color: #ffff; 
    color: #5EA0C5;
}
    </style>
</head>
<body>

<?php include 'bases/nav_in.php' ?>

<?php foreach ($dadosApostila as $key => $value ){?>
      
    <?php echo "<br>"; ?>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">ISBN</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Quantidade</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php  echo $value['isbn'] ?></td>
      <td><?php  echo $value['nome'] ?></td>
      <td><?php  echo $value['descricao'] ?></td>
      <td><?php  echo $value['quantidade'];?></td>

    <td>  <div class="bt">
        <a href="item.php">Ver detalhes</a>
    </div></td>

    </tr>
  </tbody>
</table>
<?php echo "<br>"; }?>



      <!-- Apostilas -->
<!--<section class="secao4" id="sobre">
    <div class="secao4-div">
        <div class="secao4-div-1">
            <div class="secao4-div-1-coluna">
                <img src="src/imagens/livro1.png" width="250px" alt="Ícone de livro">
                <h5 class="apostila">Apostila</h5>
                <div class="bt">
                    <a href="item.php">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="secao4-div-2">
            <div class="secao4-div-2-coluna">
                <img src="src/imagens/livro2.png"  width="250px" alt="Ícone de livro">
                <h5 class="apostila">Apostila</h5>
                <div class="bt">
                    <a href="item.php">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="secao4-div-3">
            <div class="secao4-div-3-coluna">
                <img src="src/imagens/livro1.png" width="250px" alt="Ícone de livro">
                <h5 class="apostila">Apostila</h5>
                <div class="bt">
                    <a href="item.php">Ver detalhes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="secao4-div">
        <div class="secao4-div-1">
            <div class="secao4-div-1-coluna">
                <img src="src/imagens/livro2.png"  width="250px" alt="Ícone de livro">
                <h5 class="apostila">Apostila</h5>
                <div class="bt">
                    <a href="item.php">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="secao4-div-2">
            <div class="secao4-div-2-coluna">
                <img src="src/imagens/livro1.png" width="250px" alt="Ícone de livro">
                <h5 class="apostila">Apostila</h5>
                <div class="bt">
                    <a href="item.php">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="secao4-div-3">
            <div class="secao4-div-3-coluna">
                <img src="src/imagens/livro2.png" width="250" alt="Ícone de livro">
                <h5 class="apostila">Apostila</h5>
                <div class="bt">
                    <a href="item.php">Ver detalhes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="secao4-div">
        <div class="secao4-div-1">
            <div class="secao4-div-1-coluna">
                <img src="src/imagens/livro1.png" width="250" alt="Ícone de livro">
                <h5 class="apostila">Apostila</h5>
                <div class="bt">
                    <a href="item.php">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="secao4-div-2">
            <div class="secao4-div-2-coluna">
                <img src="src/imagens/livro2.png"  width="250px" alt="Ícone de livro">
                <h5 class="apostila">Apostila</h5>
                <div class="bt">
                    <a href="item.php">Ver detalhes</a>
                </div>
            </div>
        </div>

        <div class="secao4-div-3">
            <div class="secao4-div-3-coluna">
                <img src="src/imagens/livro1.png" width="250" alt="Ícone de livro">
                <h5 class="apostila">Apostila</h5>
                <div class="bt">
                    <a href="item.php">Ver detalhes</a>
                </div>
            </div>
        </div>
    </div>

  <div class="espaço"></div>-->
  
  <?php include 'bases/rodape.php' ?>

</body>
</html>