<?php
// PARA O FRONT: não precisa de html e css nessa página. Ela é apenas programação, não aparece para io user
require 'config.php';
//require "ver_loginexiste.php";


if(isset($_POST['criar'])){




  $isbn = filter_input(INPUT_POST,'isbn');
  $nome  = filter_input(INPUT_POST,'nome');
  $quantidade = filter_input(INPUT_POST,'quantidade');
  $descricao = filter_input(INPUT_POST,'descricao');


// AUTENTICAÇ O
//verifica se ja existe uma isbn especifica no bd, se existir, DÁ ERRO
      $sql = $pdo-> prepare(" SELECT isbn FROM apostila WHERE isbn='$isbn' ");
      //executa
      $sql->execute();
      $linhas= $sql-> rowCount();


      if($linhas >=1){
         header("Location:apostilas.php?alerta=Essa apostila já está cadastrada");
         
      }else {
//prepara a query sem os caracteres especiais
      $sql = $pdo-> prepare(" INSERT INTO apostila (isbn,nome,quantidade,descricao)
      VALUES (:isbn, :nome, :quantidade, :descricao) ");
      $sql-> bindValue(':isbn',$isbn);
      $sql-> bindValue(':nome',$nome);
      $sql-> bindValue(':quantidade',$quantidade);
      $sql-> bindValue(':descricao',$descricao);


      $sql->execute();
      header("Location:apostilas.php");      
      }
         
      exit;}
     


      if(isset($_GET['delete'])){
        $isbn=(int)$_GET['delete'];
        $pdo->exec("DELETE FROM apostila WHERE isbn=$isbn");
      }
     
?>
<!--adicionar CSS -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="src/css/admin.css" />
</head>
<body>

<div class="title"><h1>Administração de Apostilas</h1></div>

<p>
  <?php foreach ($dadosApostila as $key => $value ){ 


        echo '<br>';?>

        <div class="card">
         <div class="left-container">

         <?php
          echo '<a class= "text2" href="?delete=' . $value['isbn'] . '">  Excluir </a> <br>  '; 
          echo '<a class= "text2" href="apostilas_update.php?isbn=' . $value['isbn'] . '"> Editar </a> ';
          ?>
        </div>
        
        <div class="right-container">
        <p class="text1"> ISBN: <?php echo $value['isbn']; ?>  </p>
        <p class="text1"> NOME: <?php echo $value['nome']; ?>  </p>
        <p class="text1"> QUANTIDADE: <?php echo $value['quantidade']; ?>  </p>
        <p class="text1"> DESCRIÇÃO: <?php echo $value['descricao'];  ?>  </p>

        </div>
        </div>

        <?php 
      }?>
    
  </p>


</body>
</html>
