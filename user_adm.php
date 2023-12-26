<?php
//essa pag sera para adm (provavelmente)
require "config.php";
//require "ver_loginexiste.php";
  if(isset($_GET['delete'])){
    $matricula=(int)$_GET['delete'];
    $pdo->exec("DELETE FROM usuario WHERE matricula=$matricula");
    echo "deletado";
  }
  foreach ($dadosUsuario as $key => $value ){
   
    '<a href="?delete=' . $value['matricula'] . '">(X)</a> ';
     '<a href="usuario_update.php?matricula=' . $value['matricula'] . '">Editar</a> | ';
     $value['matricula'] . ' | ' . $value['nome'] . ' | ' . $value['email_escolar'];
  }
  
?>
<!--adicionar CSS-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="src/css/admin.css" />
  <title>Document</title>
</head>
<body>
  <p>
    <h1>Administração de Usuários</h1>
    <?php 
      foreach ($dadosUsuario as $key => $value ){
          echo '<br>'; ?>

        <div class="card">
         <div class="left-container">

         <?php
           echo '<a class= "text2" href="?delete=' . $value['matricula'] . '">Excluir</a> ';
           echo '<a class= "text2" href="usuario_update.php?matricula=' . $value['matricula'] . '">Editar</a>  ';
           ?>
        </div>

        <div class="right-container">
        <p class="text1"> MATRÍCULA: <?php echo $value['matricula']; ?> </p>
          
        <p class="text1"> NOME: <?php echo $value['nome'] ; ?> </p>
        <p class="text1"> NOME: <?php echo $value['email_escolar'];  ?> </p>
        </div>
        </div>

      <?php
          }
      ?>
  </p>
</body>
</html>