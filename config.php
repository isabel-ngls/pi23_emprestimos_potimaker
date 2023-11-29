<?php
// PARA O FRONT: não precisa de html e css nessa página. Ela é apenas programação, não aparece para o user
  $db_host = "localhost:3306";
  $db_name = "bd_potimaker";
  $db_user = "root";
  $db_password = "";

  //PDO chama a classe da variavel e passa como parametro o nome do banco, o local de acesso, o nome de usuario e senha)
  //mysql é o tipo de conexção
  $pdo = new PDO("mysql:dbname=".$db_name."; host=".$db_host , $db_user, $db_password);

  //chama a função query para fazer uma consulta na tabela usuario
// Consulta na tabela "usuario"
  $sqlUsuario = $pdo->query('SELECT * FROM usuario');
  $dadosUsuario = $sqlUsuario->fetchAll(PDO::FETCH_ASSOC);

  // Consulta na tabela "apostila"
  $sqlApostila = $pdo->query('SELECT * FROM apostila');
  $dadosApostila = $sqlApostila->fetchAll(PDO::FETCH_ASSOC);
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