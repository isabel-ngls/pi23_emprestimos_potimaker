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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'bases/head.php' ?>
    
    <title>Edição de Apostilas</title>

    <style>

body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    align-items: center;
    justify-content: center;
    font-family: 'Inter', sans-serif;
    background: linear-gradient(to right,  #8AC5E2,  #6FC1CC);

}

.img-box{
    background-color: rgba(255, 255, 255, 0.5);
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    padding: 20px;
    border-radius: 20px  0 0 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.box{
    display: flex;
    margin-top: 70px;
    padding: 40px;
}

.form-box{
    background-color: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(40px);
    padding: 50px 40px;
    width: 50%;
    height: 100%;
    border-radius: 0 20px 20px 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.form-box h2{
    font-size: 30px;
    color: #5EA0C5;
    font-family: 'Lexend', sans-serif;
}

.form-box form{
    margin: 20px 0;
}

form .input-group{
    margin-bottom: 15px;
}

form .input-group label{
    color: #417086;
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

form .input-group input, .input-group textarea {
    width: 100%;
    height: 10px;
    background-color: rgba(255, 255, 255, 0.32);
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    padding: 15px;
    font-size: 15px;
    color: #616161;
    transition: all 0.4s ease;
    font-family: 'Inter', sans-serif;
}

form .input-group input:focus{
    border-color: #3598B2;
}

form textarea{
    resize: none;
}

.criar input[type="submit"]{
    width: 100%;
    height: 47px;
    background: #3598B2;
    border-radius: 20px;
    outline: none;
    border: none;
    margin-top: 15px;
    color: white;
    cursor: pointer;
    font-size: 16px;
    font-family: 'Lexend', sans-serif;
    text-transform: uppercase;
    font-weight: bold;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

input[type="submit"]:hover {
    background-color: #ffff; 
    color: #3598B2;
}

.login{
  color: #3598B2;
  text-decoration: none;
  font-weight: bold;
}

.login:hover{
  color: #0EBDB8;
}

@media (max-width:930px){
    .img-box{
        display: none;
    }
    .box{
        width: 610px;
    }
    .form-box{
        width: 100%;
        border-radius: 20px;
    }
}
</style>
<?php include 'bases/nav_in.php' ?>
</head>
<body>

<!-- Formulário de edição -->
<div class="box">

        <div class="img-box">
            <img src="src/imagens/editar.png" width="250px" height="auto" alt="Ícone de cadastro">
        </div>

        <div class="form-box">

        <form method="post">

            <div class="input-group"> 
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?= $apostila['nome'] ?>" required>
            </div>

            <div class="input-group"> 
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" value="<?= $apostila['quantidade'] ?>" required>
            </div>

            <div class="input-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" required><?= $apostila['descricao'] ?></textarea>
            </div>


            <div class="criar">
                <input type="submit" name="editar" value="Editar">
            </div>

            
        </form>

        </div>
</div>
<div class="espaço"></div>
<?php include 'bases/rodape.php' ?>
</body>
</html>