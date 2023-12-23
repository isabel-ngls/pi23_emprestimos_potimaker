<?php
// PARA O FRONT: não precisa de html e css nessa página. Ela é apenas programação, não aparece para o user
  $db_name = "bd_potimaker";
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "";
  $port="3306";

  //PDO chama a classe da variavel e passa como parametro o nome do banco, o local de acesso, o nome de usuario e senha)
  //mysql é o tipo de conexção

  $pdo = new PDO("mysql:host=$db_host;port=$port;dbname=".$db_name,$db_user,$db_password);

  //chama a função query para fazer uma consulta na tabela usuario
// Consulta na tabela "usuario"

  $sqlUsuario = $pdo->query('SELECT * FROM usuario');
  $dadosUsuario = $sqlUsuario->fetchAll(PDO::FETCH_ASSOC);

  // Consulta na tabela "apostila"
  $sqlApostila = $pdo->query('SELECT * FROM apostila');
  $dadosApostila = $sqlApostila->fetchAll(PDO::FETCH_ASSOC);
  //fetchALL "pega" os elementos da tabela 

  $sqlEmprestimo = $pdo->query('SELECT * FROM emprestimo_apostila');
  $dadosEmprestimo = $sqlEmprestimo->fetchAll(PDO::FETCH_ASSOC);
  //fetchALL "pega" os elementos da tabela 

  //echo('<pre>');//retirar isso

  //os dados pego pelo fetchAll são armazenados na variavel $dados
  
// Exibir dados da tabela "usuario"
  //echo "Dados da tabela 'usuario':\n";
  //print_r($dadosUsuario);

  // Exibir dados da tabela "apostila"
  //echo "\nDados da tabela 'apostila':\n";
  //print_r($dadosApostila);//não imprimir, dados sensiveis.

?>