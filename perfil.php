<?php
require "config.php";
session_start();


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include 'bases/head.php' ?>
<title>Meu Perfil</title>
<link rel="stylesheet" type="text/css" href="src/css/perfil.css" />
<body>

<?php include 'bases/menu.php' ?>

    <div class="perfil">
    <div class="card">
  <div class="left-container">
    <img src="src/imagens/userr.png" alt="Ícone de estudante">
    <h2 class="gradienttext">Usuário: <br></h2>
    <h2 class="gradienttext"><?php echo  $_SESSION["matricula"];?></h2>
   <!-- <p class="centralizar">Matrícula: 00000000000000</p>
    <p class="centralizar">Email: aluno@escolar.com</p> -->
  </div>
  <div class="right-container">
    <h3 class="gradienttext">Apostilas emprestadas</h3>
    <table>
        <tr>
            <td>Apostila 1</td>
            <td>Data: 00/00/00</td>
          </tr>
      <tr>
        <td>Apostila 2</td>
        <td>Data: 00/00/00</td>
      </tr>
      <tr>
        <td>Apostila 3</td>
        <td>Data: 00/00/00</td>
      </tr>
      <tr>
        <td>Apostila 4</td>
        <td>Data: 00/00/00</td>
      </tr>
    </table>
</div>
</div>
</div>

<?php include 'bases/rodape.php' ?>

</body>
</html>