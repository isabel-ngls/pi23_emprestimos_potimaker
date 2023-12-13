<?php
require 'config.php';
//require "ver_loginexiste.php";
if(isset($_GET['isbn'])){
    $isbn = (int)$_GET['isbn'];

    // Recupera os dados da apostila pelo ISBN
    $sql = $pdo->prepare("SELECT * FROM apostila WHERE isbn = :isbn");
    $sql->bindValue(':isbn', $isbn);
    $sql->execute();
    $apostila = $sql->fetch(PDO::FETCH_ASSOC);

    if(!$apostila) {
        header("Location: apostilas.php?alerta=Apostila não encontrada");
        exit;
    }
} else {
    // Se não foi fornecido um ISBN, redireciona para a página de apostilas
    header("Location: apostilas.php");
    exit;
}

if(isset($_POST['editar'])) {
    // Atualiza os dados da apostila
    $nome = filter_input(INPUT_POST, 'nome');
    $quantidade = filter_input(INPUT_POST, 'quantidade');
    $descricao = filter_input(INPUT_POST, 'descricao');

    $sql = $pdo->prepare("UPDATE apostila SET nome = :nome, quantidade = :quantidade, descricao = :descricao WHERE isbn = :isbn");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':quantidade', $quantidade);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':isbn', $isbn);

    $sql->execute();

    header("Location: apostilas.php");
    exit;
}
?>

<!-- Formulário de edição -->
<form method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?= $apostila['nome'] ?>" required>
    <br>

    <label for="quantidade">Quantidade:</label>
    <input type="number" name="quantidade" value="<?= $apostila['quantidade'] ?>" required>
    <br>

    <label for="descricao">Descrição:</label>
    <textarea name="descricao" required><?= $apostila['descricao'] ?></textarea>
    <br>

    <input type="submit" name="editar" value="Editar">
</form>
