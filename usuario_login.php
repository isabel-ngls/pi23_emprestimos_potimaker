<?php 
require 'config.php';

if(isset($_POST['matricula']) && isset($_POST['senha'])){
    $matricula=$_POST['matricula'];
    $senha=$_POST['senha'];

   $slq= "SELECT * FROM usuarios 
            WHERE matricula='$matricula' AND senha ='$senha' ";

            $res= mysql_query($pdo, $sql);

            if(mysql_num_rows($res) == 1){
                header("location:apostilas.php");
 }  }else{
    header("location:login.php?alerta=Matrícula e/ou senha incorreta(s)");
    exit();
}

?>