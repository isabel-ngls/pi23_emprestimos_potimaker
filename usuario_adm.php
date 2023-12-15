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
  <title>Document</title>
</head>
<body>
  <h1>
    <?php 
      foreach ($dadosUsuario as $key => $value ){

        echo '<br>';
           echo '<a href="?delete=' . $value['matricula'] . '">(X)</a> ';
           echo '<a href="usuario_update.php?matricula=' . $value['matricula'] . '">Editar</a> | ';
           echo $value['matricula'] . ' | ' . $value['nome'] . ' | ' . $value['email_escolar'];  }
      ?>
  </h1>
</body>
</html>