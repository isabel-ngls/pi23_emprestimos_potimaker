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
  if(!$usuario) {
        header("Location: usuarios.php?alerta=Usuário não encontrado");
        exit;
    }
 else {
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'bases/head.php' ?>
    
    <title>Edição de Usuários</title>

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
</head>
<body>

<!-- Formulário de edição -->
<div class="box">

        <div class="img-box">
            <img src="src/imagens/editar_usuario.png" width="250px" height="auto" alt="Ícone de cadastro">
        </div>

        <div class="form-box">

        <form method="post">

        <div class="input-group"> 
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required>
        </div>

        <div class="input-group"> 
            <label for="email_escolar">Email_escolar:</label>
            <input type="email_escolar" name="email_escolar" value="<?= $usuario['email_escolar'] ?>" required>
        </div>
            
        <div class="input-group"> 
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
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
