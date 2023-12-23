<?php
require 'config.php';

if(isset($_GET['matricula'])){
    $matricula = (int)$_GET['matricula'];

    // Recupera os dados do usuário pela matrícula
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE matricula = :matricula");
    $sql->bindValue(':matricula', $matricula);
    $sql->execute();
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
}
   /*if(!$usuario) {
        header("Location: usuarios.php?alerta=Usuário não encontrado");
        exit;
    }
} else {
    // Se não foi fornecida uma matrícula, redireciona para a página de usuários
    header("Location: usuarios.php");
    exit;
}
*/
if(isset($_POST['editar'])) {
    // Atualiza os dados do usuário
    $nome = filter_input(INPUT_POST, 'nome');
    $email_escolar = filter_input(INPUT_POST, 'email_escolar');
    $senha = filter_input(INPUT_POST, 'senha');

    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email_escolar = :email_escolar, senha = :senha WHERE matricula = :matricula");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email_escolar', $email_escolar);
    $sql->bindValue(':senha', $senha);
    $sql->bindValue(':matricula', $matricula);

    $sql->execute();

    header("Location: usuario_deletar.php");
    exit;
}
?>

<!-- Formulário de edição -->
<!--adicionar CSS-->
<form method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required>
    <br>

    <label for="email_escolar">Email_escolar:</label>
    <input type="email_escolar" name="email_escolar" value="<?= $usuario['email_escolar'] ?>" required>
    <br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" required>
    <br>

    <input type="submit" name="editar" value="Editar">
</form>
