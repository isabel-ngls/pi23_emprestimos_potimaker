<?php
//essa pag sera para adm (provavelmente)
require "config.php";

  if(isset($_GET['delete'])){
    $matricula=(int)$_GET['delete'];
    $pdo->exec("DELETE FROM usuario WHERE matricula=$matricula");
    echo "deletado";
  }
  foreach ($dados as $key => $value ){
    echo '<a href=?delete='.$value['matricula'].'">(X)</a>'.$value['matricula'].'| '.$value['nome'].'|'.$value['email_escolar'].'|'.$value['senha'];
  }
?>