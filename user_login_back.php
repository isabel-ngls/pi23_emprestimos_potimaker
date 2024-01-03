
<?php
include "config.php";

if(isset($_POST['criar'])){


    $matricula = filter_input(INPUT_POST,'matricula');
    $nome  = filter_input(INPUT_POST,'nome');
    $email = filter_input(INPUT_POST,'email');
    $senha = filter_input(INPUT_POST,'senha');

    $senha_cripto=md5($senha);


    $sql = $pdo->prepare("SELECT * FROM usuario WHERE matricula = :matricula AND senha = :senha_cripto");
    $sql->bindParam(':matricula', $matricula);
    $sql->bindParam(':senha_cripto', $senha_cripto);
    $sql->execute();
    
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    
    if ($usuario) {
        session_start();
        $_SESSION['matricula'] = $usuario['matricula'];
        $_SESSION['email'] = $usuario['email_escolar']; 
        $_SESSION['nome'] = $usuario['nome'];
        
        // Acessa o nome do array de resultados
       header('Location: user_perfil.php');
        exit;
    } else {
        echo "Erro";
        header("Location: user_login_front.php?error=autenticacao");
        exit;
    }
    

}


?>