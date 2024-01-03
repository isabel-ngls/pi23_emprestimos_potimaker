<?php
include "config.php";

if(isset($_POST['criar'])){


    $matricula = filter_input(INPUT_POST,'matricula');
    $nome  = filter_input(INPUT_POST,'nome');
    $senha = filter_input(INPUT_POST,'senha');

    $senha_cripto=md5($senha);


$sql = $pdo-> prepare(" SELECT * FROM administrador WHERE matricula=:matricula AND senha=:senha_cripto ");
$sql->bindParam(':matricula', $matricula);
    $sql->bindParam(':senha_cripto', $senha_cripto);
    $sql->execute();
    
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    
    if ($usuario) {
        session_start();
        $_SESSION['matricula'] = $usuario['matricula'];
        $_SESSION['nome'] = $usuario['nome'];
        
        // Acessa o nome do array de resultados
       header('Location: adm_perfil.php');
        exit;
    } else {
        echo "Erro";
        header("Location: adm_login_front.php?alerta=Matrícula e/ou senha incorretos");
        exit;
    }
    

}

    







?>