<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include 'bases/head.php';
//require "ver_loginexiste.php"; ?>
<title>PotiEmpresta</title>
<style>
      body {
    font-family: 'Inter', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #DEF2FF;
}

.product-container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #E5EEF8;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.product-container img {
    max-width: 100%;
    border-radius: 4px;
}

.product-details {
    margin-top: 20px;
}

.product-details h1 {
    font-size: 30px;
}

.unidade {
    font-size: 18px;
    color: #e44d26;
    margin-bottom: 10px;
}

.product-details p {
    color: #417086;
}

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
    </style>
</head>
<body>

<?php include 'bases/nav_in.php' ?>

      <div class="product-container">
        <img src="src/imagens/livro1.png" alt="Ícone de apostila" ">
        <div class="product-details">
            <h1 class="titulo">Apostila</h1>
            <p class="unidade">2 unidades disponíveis</p>
            <p>Descrição da apostila lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="buy-button">Pegar emprestado</button>
        </div>
    </div>

  <?php include 'bases/rodape.php' ?>

</body>
</html>