<?php
require "config.php";

session_start();
if(!isset($_SESSION["matricula"])){
  header("Location:index.php");
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include 'bases/head.php' ?>
<title>Meu Perfil</title>
<link rel="stylesheet" type="text/css" href="src/css/perfil.css" />
<style>
  .logout{
    background-color: #5FB8C6;
    display: inline-block;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 25px;
    padding-left: 25px;
    position: static;
    text-align: justify;
    border-radius: 50px;
    font-size: 15px;
    font-weight: bold;
    box-shadow: 10px 5px 5px #315754;
    transition: all 0.4s ease;
    margin-left: 185px;
    color: #ffff;
    font-family: 'Lexend', sans-serif;
    border: white;
  }

  .logout:hover{
    color: #5EB9C5;
    background-color: #f5f5f5;
  }

  .classe1{
    background-color: #D7F7FD;
    color: #49CBB3;
    display: inline-block;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 25px;
    padding-left: 25px;
    position: static;
    text-align: justify;
    border-radius: 50px;
    font-size: 15px;
    font-weight: bold;
    box-shadow: 10px 5px 5px #315754;
    transition: all 0.4s ease;
  }

  .classe1:hover{
    color: #279BAB;
  }
</style>
<body>

<?php include 'bases/nav_in.php' ?>

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
    <a href="apostilas.php" class="classe1"> 
      <i class="fa-solid fa-book-bookmark"></i> Reservar apostila</a>
</div>
</div>
</div>

<?php include 'bases/rodape.php' ?>

</body>
</html>