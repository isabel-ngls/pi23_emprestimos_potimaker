<?php
require 'config.php';

  $matricula = filter_input(INPUT_POST,'matricula');
  $nome  = filter_input(INPUT_POST,'nome ');
  $email = filter_input(INPUT_POST,'email');
  $senha = filter_input(INPUT_POST,'senha');

  if ($matricula && $nome && email && $senha) {

      $sql = $pdo-> prepare(" INSERT INTO usuario (matricula,nome,email_escolar,senha) 
                              VALUES (:matricula, :nome, :email, :senha) ");
        $sql-> bindValue(':matricula',$matricula); 
        $sql-> bindValue(':nome' ,$nome);
        $sql-> bindValue(':email',$email);
        $sql-> bindValue(':senha',$senha);
      $sql->execute();
      header("Location:index.php");           }
   else{
      header("Location:index.php");
      exit;
   }
  
?>