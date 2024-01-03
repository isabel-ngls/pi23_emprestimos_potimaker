<?php
require "config.php";
include "user_login_back.php";
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
  .buy-button {
    background-color: #3598B2;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: 0.3s;
    font-family: 'Lexend', sans-serif;
}

.buy-button:hover {
    background-color: #78D5E1;
}
a{
  color: white;
}
a:hover{
  color: white;
}
</style>
<body>

<?php include 'bases/nav_in.php' ?>

    <div class="perfil">
    <div class="card">
  <div class="left-container">
    <img src="src/imagens/userr.png" alt="Ícone de estudante">
    <h2 class="gradienttext">Usuário: <br></h2>
    <h2 class="gradienttext"><?php echo  $_SESSION["nome"];?></h2>
  
  </div>
  <div class="right-container">

    <h3 class="gradienttext">Seus Dados</h3>
    <table>

        <td><p>Matrícula:</p><?php echo  $_SESSION["matricula"];?></td>
       
      </tr>
      <tr>
      <td><p>E-mail:</p><?php echo  $_SESSION["email"];?></td>
       
      </tr>
      <tr>
        <td>
        <button class="buy-button"> <a href="apostilas.php">Ir para página de apostilas</button>
      </td>
       
      </tr>
    </table>
    
</div>
</div>
</div>

<?php include 'bases/rodape.php' ?>

</body>
</html>