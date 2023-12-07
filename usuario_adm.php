<?php
//essa pag sera para adm (provavelmente)
require "config.php";

  if(isset($_GET['delete'])){
    $matricula=(int)$_GET['delete'];
    $pdo->exec("DELETE FROM usuario WHERE matricula=$matricula");
    echo "deletado";
  }
  foreach ($dadosUsuario as $key => $value ){
    echo '<br>';
    echo '<a href="?delete=' . $value['matricula'] . '">(X)</a> ';
    echo '<a href="usuario_update.php?matricula=' . $value['matricula'] . '">Editar</a> | ';
    echo $value['matricula'] . ' | ' . $value['nome'] . ' | ' . $value['email_escolar'];
  }
  
?>