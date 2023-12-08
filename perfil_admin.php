<?php
session_start();


?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="src/css/perfil.css" />
<?php include 'bases/head.php' ?>
<title>Meu Perfil-Administrador</title>
<link rel="stylesheet" type="text/css" href="src/css/perfil.css" />
<body>

<?php include 'bases/menu.php' ?>

    <div class="perfil">
    <div class="card">
  <div class="left-container">
    <img src="src/imagens/userr.png" alt="Ícone de estudante">
    <h2 class="gradienttext">Administrador</h2>
    <p class="centralizar"><?php echo  $_SESSION["matricula"];?></p>
    <p class="centralizar">Email: admim@escolar.com</p>
  </div>
  <div class="right-container">
  <h3 class="gradienttext tamanho">Páginas administrativas</h3>
  <br>
  <a href="apostilas_cadastro.php"><i class="fa-solid fa-file-circle-plus"></i>  Cadastrar apostilas</a> <br>
  <a href=""><i class="fa-solid fa-list-check"></i>  Gerenciar apostilas</a> <br>
  <a href=""><i class="fa-solid fa-people-roof"></i>  Gerenciar usuários</a>
    
</div>
</div>
</div>

<?php include 'bases/rodape.php' ?>

</body>
</html>