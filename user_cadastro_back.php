
<?php
session_start();

require 'config.php';

if(isset($_POST['criar'])){


  $matricula = filter_input(INPUT_POST,'matricula');
  $nome  = filter_input(INPUT_POST,'nome');
  $email = filter_input(INPUT_POST,'email');
  $senha = filter_input(INPUT_POST,'senha');
  $cod = filter_input(INPUT_POST,'codigo');

  $senha_cripto=md5($senha);
// AUTENTICAÇÂO
//verifica se ja existe uma matricula especifica no bd, se existir, manda para página de login, caso 
//contrario o user vai para pagina de apostilas
        $sql = $pdo-> prepare(" SELECT matricula FROM usuario WHERE matricula='$matricula' ");
      //executa
      $sql->execute();
      $linhas= $sql-> rowCount();

      if($linhas >=1){
        header("Location:user_login_front.php?alerta=Essa conta já está cadastrada, realize login"); 
        
      }
      if($linhas == 0){
      if($cod==123) {
        //prepara a query sem os caracteres especiais
              $sql = $pdo-> prepare(" INSERT INTO administrador (matricula,nome,senha) 
              VALUES (:matricula, :nome, :senha) ");
              $sql-> bindValue(':matricula',$matricula); 
              $sql-> bindValue(':nome',$nome);
              $sql-> bindValue(':senha', $senha_cripto);
        
              $sql->execute();
              header("Location:adm_login_front.php?alerta=Cadastrado como administrador");  
              
              }

      else  {
//prepara a query sem os caracteres especiais
      $sql = $pdo-> prepare(" INSERT INTO usuario (matricula,nome,email_escolar,senha) 
      VALUES (:matricula, :nome, :email, :senha) ");
      $sql-> bindValue(':matricula',$matricula); 
      $sql-> bindValue(':nome',$nome);
      $sql-> bindValue(':email',$email);
      $sql-> bindValue(':senha', $senha_cripto);

      $sql->execute();
      header("Location:user_login_front.php?alerta=Cadastrado como usuário");  
      
      
          
      exit;}}}
      
   
?>

