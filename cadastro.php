<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include 'bases/head.php' ?>
<title>Cadastro</title>
<style>
      /*Cadastro*/
      body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-image: url(imagens/fundo_cad.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    align-items: center;
    justify-content: center;
}

.box{
    display: flex;
    margin-top: 50px;
    padding: 40px;
}

.img-box{
    background-color: rgba(255, 255, 255, 0.5);
    width: 50%;
    height: 135%;
    display: flex;
    align-items: center;
    padding: 20px;
    border-radius: 20px  0 0 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-box{
    background-color: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(40px);
    padding: 30px 40px;
    width: 50%;
    height: 135%;
    border-radius: 0 20px 20px 0;
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

form .input-group input{
    width: 100%;
    height: 47px;
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
    border-color: #5EA0C5;
}

.criar input[type="submit"]{
    width: 100%;
    height: 47px;
    background: #5EA0C5;
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
    color: #5EA0C5;
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

<?php include 'bases/menu.php' ?>

  <!--Cadastro de usuário-->
  <div class="box">
        <div class="img-box">
            <img src="src/imagens/icon_cad.png" width="250px" height="auto" alt="Ícone de cadastro">
        </div>
        <div class="form-box">
        <h2> <i class="fa-solid fa-user fa-beat"></i> Crie sua conta</h2>
        <p>Já possui uma conta ? Faça <a class="login" href="login.php">login</a></p>

        <!--formulário--> 

            <form action="usuario_cadastro.php" method="post">
                <div class="input-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu endereço de email" required>
                </div>
                <div class="input-group">
                    <label for="matrícula">Matrícula:</label>
                    <input type="number" id="matricula" name="matricula" placeholder="Digite sua matrícula do SUAP" required>
                </div>
                <div class="input-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Escolha uma senha" required>
                </div>
                <div class="criar">
                    <input type="submit" name="criar" value="Criar conta">
                </div>
            </form>
        </div>
    </div>

  <div class="espaço"></div>
  
  <?php include 'bases/rodape.php' ?>

</body>
</html>