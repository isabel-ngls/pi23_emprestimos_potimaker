<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include 'bases/head.php' ?>
<title>PotiEmpresta</title>
</head>
<style>
  @media screen and (max-width: 426px) {
    .comp {
      padding-top: 300px;
      margin-top: 50px;
      position: relative;
      top: 0;
      left: 0;
      left: 10%; 
    }

    .texto h1 {
    text-align: center;
    margin: 0 auto;
  }

  .page2, .page3 {
    flex-direction: column;
    text-align: center;
  }

  .page2 p, .page2 h2{
    margin-left: 30px;
  }

  .page3 p{
    margin-left: 60px;
  }

  .page3 h2{
    margin-left: 20px;
    margin-top: -270px;
  }

  .page3 img{
    margin-left: -50px
  }

  .potimaker img, .icon img {
    width: 100%; 
    margin-bottom: 10px; 
  }

  .page5 img {
    width: 100%; 
    margin-top: 600px;
  }

  .page5 h1 {
    font-size: 1.5em; 
  }

}



</style>
<body>

<?php include 'bases/nav_out.php' ?>

  <div class="content">
  <section class="page1">
    <div class="home">
        <div class="div1">
            <div class="texto"><h1>Aqui o <br>conhecimento se <br>encontra e se <br>compartilha</h1></div>
            <img class="comp" src="src/imagens/icon_comp.png" alt="Ícone de computador" width="650px">
                <div class="botao">
                    <a href="#quemsomos">Nos conheça</a>
                </div>
        </div>
    </div>
    <div class="center">
        <img src="src/imagens/seta.png" alt="Ícone de seta para baixo" width="100px">
    </div>
    </div>
    </section>

    <section class="page2" id="poti">
      <div class="potimaker">
        <img src="src/imagens/PM1.png" alt="Imagem do FabLab Potimaker" width="475px">
      </div> 
      <div class="somos">
          <h2>O Potimaker</h2>
          <p> O Laboratório de Prototipagem e Inovação <br>
          do IFRN-Campus Canguaretama, ou <br>
          simplesmente Potimaker, é um espaço <br>
          de colaboração e experimentação onde <br>
          várias pessoas podem trabalhar juntas <br>
          para transformar suas ideias em realidade</p>
      </div>
    </section>

    <section class="page3" id="quemsomos">
        <div class="icon">
          <img src="src/imagens/icon2.png" alt="Ícone de livro com prancheta" width="580px">
       </div>
      <div class="somos">
      <h2>Quem somos</h2>
      <p>O laboratório Potimaker dispõe de  <br>
      diversos materiais que podem ser <br>
      acessados pelas pessoas do campus <br>
      que se interessarem. Assim, pensando <br>
      em um melhor e mais eficiente <br>
      gerenciamento desses recursos, o <br> 
      PotiEmpresta foi criado</p>
      </div>
    </section>

    <section class="page4" id="funcionamento" >
      <h2>Como funciona</h2>
      <div class="dividir">
        <div class="box sec1">
          <img src="src/imagens/cadastro.png" alt="Ícone de cadastro" width="375px">
          <h4>Cadastro</h4>
          <p>O processo é simples e rápido. Primeiro você realiza seu cadastro e assim cria sua conta.</p>
          <img class="seta" src="src/imagens/seta.png" alt="Ícone de seta para baixo" width="100px">
        </div>
        <div class="box sec2">
          <img src="src/imagens/livro.png" alt="Ícone de livro" width="375px">
          <h4>Escolha da apostila</h4>
          <p>Depois disso, você é redirecionado para a página de exibição das apostilas para poder escolher a que deseja.</p>
          <img src="src/imagens/seta.png" alt="Ícone de seta para baixo" width="100px">
        </div>
        <div class="box sec3">
          <img src="src/imagens/prazo.png" alt="Ícone de calendário" width="375px">
          <h4>Prazo</h4>
          <p>Agora você tem o prazo de 2 dias para ir até o Potimaker e retirar sua apostila escolhida.</p>
          <img src="src/imagens/seta.png" alt="Ícone de seta para baixo" width="100px">
        </div>
      </div>
    </section>

    <section class="page5" >
        <img src="src/imagens/icon3.png" alt="Ícone de pessoa com livros" width="300px">
        <h1>“A busca pelo conhecimento é a <br>mais nobre das buscas" </h1>
        <p>- Autor desconhecido</p>
    </section>

  <div class="espaço"></div>
  
  <?php include 'bases/rodape.php' ?>

</body>
</html>