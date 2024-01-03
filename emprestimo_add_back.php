
<?php

require 'config.php';

if(isset($_POST['cadastrar'])){

  
    $data_emprestimo = filter_input(INPUT_POST,'data_emprestimo');
    $data_devolucao = filter_input(INPUT_POST,'data_devolucao');
    $matricula_user = filter_input(INPUT_POST,'user');
    $isbn_apostila = filter_input(INPUT_POST,'isbn');
 

//prepara a query sem os caracteres especiais
      $sql = $pdo-> prepare(" INSERT INTO emprestimo_apostila (data_emprestimo,data_devolucao, matricula_usuario,isbn_apostila) 
      VALUES (:data_emprestimo, :data_devolucao, :user,:isbn) ");
     $sql-> bindValue(':data_emprestimo',$data_emprestimo); 
     $sql-> bindValue(':data_devolucao', $data_devolucao );
     $sql-> bindValue(':user',$matricula_user );
     $sql-> bindValue(':isbn', $isbn_apostila);


      $sql->execute();
      header("Location:emprestimos_exibir.php");  
     
      
      
          
      ;}
      
   
?>

