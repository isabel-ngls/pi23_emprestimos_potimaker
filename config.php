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
  $sql = $pdo -> query('SELECT * FROM usuario');

  //fetchALL "pega" os elementos da tabela 
  $dados = $sql->fetchALL(pdo::FETCH_ASSOC);
  echo('<pre>');//retirar isso

  //os dados pego pelo fetchAll são armazenados na variavel $dados
  print_r($dados);//não imprimir, dados sensiveis.

?>