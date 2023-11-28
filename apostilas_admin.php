<?php
// PARA O FRONT: não precisa de html e css nessa página. Ela é apenas programação, não aparece para io user
require 'config.php';

if(isset($_POST['criar'])){


  $isbn = filter_input(INPUT_POST,'isbn');
  $nome  = filter_input(INPUT_POST,'nome');
  $quantidade = filter_input(INPUT_POST,'quantidade');
  $descricao = filter_input(INPUT_POST,'descricao');

// AUTENTICAÇÂO
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
      foreach ($dados as $key => $value ){
        echo '<br>';
        echo '<a href="?delete=' . $value['isbn'] . '">(X)</a> ';
        echo '<a href="apostilas_update.php?isbn=' . $value['isbn'] . '">Editar</a> | ';
        echo $value['isbn'] . ' | ' . $value['nome'] . ' | ' . $value['quantidade'] . ' | ' . $value['descricao'];
      
      }
   
?>