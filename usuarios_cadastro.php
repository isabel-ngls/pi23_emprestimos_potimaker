<?php
require 'config.php';

if(isset($_POST['criar'])){


  $matricula = filter_input(INPUT_POST,'matricula');
  $nome  = filter_input(INPUT_POST,'nome');
  $email = filter_input(INPUT_POST,'email');
  $senha = filter_input(INPUT_POST,'senha');

//verifica se ja existe uma matricula especifica no bd, se existir, mantem na pagina de cadastro, caso 
//contrario ouser vai para pagina de apostilas
        $sql = $pdo-> prepare(" SELECT matricula FROM usuario WHERE matricula='$matricula' ");
      //executa
      $sql->execute();
      $linhas= $sql-> rowCount();

      if($linhas >=1){
         header("Location:cadastro.php"); 
         

      }else {
//prepara a query sem os caracteres especiais
      $sql = $pdo-> prepare(" INSERT INTO usuario (matricula,nome,email_escolar,senha) 
      VALUES (:matricula, :nome, :email, :senha) ");
      $sql-> bindValue(':matricula',$matricula); 
      $sql-> bindValue(':nome',$nome);
      $sql-> bindValue(':email',$email);
      $sql-> bindValue(':senha',$senha);

      $sql->execute();
      header("Location:apostilas.php");      
      }
          

      exit;}
   
?>