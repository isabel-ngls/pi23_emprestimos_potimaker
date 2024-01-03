<?php

session_start();
if(!isset($_SESSION["matricula"])){
  header("Location:index.php");
}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="src/css/perfil.css" />
<?php include 'bases/head.php' ?>
<title>Meu Perfil-Administrador</title>
<link rel="stylesheet" type="text/css" href="src/css/perfil.css" />
<body>

<?php include 'bases/nav_in.php' ?>

    <div class="perfil">
    <div class="card">
  <div class="left-container">
    <img src="src/imagens/userr.png" alt="Ícone de estudante">
    <h2 class="gradienttext">Administrador</h2>
    <p class="centralizar"><?php echo  $_SESSION["nome"];?></p>
    <p class="centralizar"><?php echo  $_SESSION["matricula"];?></p>
  </div>
  <div class="right-container">
  <h3 class="gradienttext tamanho">Páginas administrativas</h3>
  <br>
  <a href="apostilas_cadastro.php"><i class="fa-solid fa-file-circle-plus"></i>  Cadastrar apostilas</a> <br>
  <a href="apostilas_adm.php"><i class="fa-solid fa-list-check"></i>  Gerenciar apostilas</a> <br>
  <a href="user_adm.php"><i class="fa-solid fa-people-roof"></i>  Gerenciar usuários</a><br>
  <a href="emprestimo_add_front.php"><i class="fa-solid fa-people-roof"></i>  Cadastrar emprestimo</a><br>
  <a href="emprestimos_exibir.php"><i class="fa-solid fa-people-roof"></i>  Gerenciar Emprestimos</a>

    
</div>
</div>
</div>

<?php include 'bases/rodape.php' ?>

</body>
</html>