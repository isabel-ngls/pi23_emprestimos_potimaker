
<?php
session_start();
if(!isset($_SESSION["matricula"])){
  header("Location:index.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include 'bases/head.php' ;
include 'bases/nav_in.php';
require 'config.php';

if(isset($_GET['delete'])){
    $id=(int)$_GET['delete'];
    $pdo->exec("DELETE FROM emprestimo_apostila WHERE id=$id");
    echo "deletado";
  }
  foreach ($dadosEmprestimo as $key => $value ){
   
    '<a href="?delete=' . $value['id'] . '">(X)</a> ';
    // '<a href="usuario_update.php?matricula=' . $value['id'] . '">Editar</a> | ';
     $value['id'] . ' | ' . $value['data_emprestimo'] . ' | ' . $value['data_devolucao']. ' 
     | ' . $value['matricula_usuario']. ' | ' . $value['isbn_apostila'];
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="src/css/admin.css" />
  <title>Gerenciar empréstimos</title>
  <style>
        .esp{
          margin-top: 50px;
        }
        .right-container.aumentar {
          height: 240px; 
        }
       </style>
</head>
<body>
  <p>
    <h1 class="esp" >Administração de Empréstimos</h1>
    <?php 
      foreach ($dadosEmprestimo as $key => $value ){
          echo '<br>'; ?>

        <div class="card">
         <div class="left-container">

         <?php
           echo '<a class= "text2" href="?delete=' . $value['id'] . '">Excluir</a> ';
           ?>
        </div>

        <div class="right-container aumentar">
        <p class="text1"> ID: <?php echo $value['id']; ?> </p>
        <p class="text1"> DATA DE EMPRÉSTIMO: <?php echo $value['data_emprestimo'] ; ?> </p>
        <p class="text1"> DATA DE DEVOLUÇÃO: <?php echo $value['data_devolucao'] ;  ?> </p>
        <p class="text1"> USUÁRIO: <?php echo $value['matricula_usuario'] ; ?> </p>
        <p class="text1"> ISBN: <?php echo $value['isbn_apostila'] ;  ?> </p>
<br>
        </div>
        </div>

      <?php
          }
      ?>
  </p>
  <?php include 'bases/rodape.php' ?>
</body>
</html>