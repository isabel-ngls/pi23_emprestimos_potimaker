<?php
include "config.php";

if(isset($_POST['criar'])){


    $matricula = filter_input(INPUT_POST,'matricula');
    $nome  = filter_input(INPUT_POST,'nome');
    $email = filter_input(INPUT_POST,'email');
    $senha = filter_input(INPUT_POST,'senha');

    $senha_cripto=md5($senha);


$sql = $pdo-> prepare(" SELECT matricula FROM usuario WHERE matricula='$matricula' AND senha='$senha_cripto' ");
//executa
$sql->execute();
$linhas= $sql-> rowCount();


if($linhas >=1){
 
  session_start();
  $_SESSION['matricula'] = $matricula;
  //$_SESSION['nome'] = $linhas['nome'];
  header('location: user_perfil.php');

}else {
echo "erro";
$sql->execute();
header("Location:index.php");      }


}
    







?>