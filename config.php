<?php

  $db_host = "localhost:3306";
  $db_name = "bd_potimaker";
  $db_user = "root";
  $db_password = "";

  $pdo = new PDO("mysql:dbname=".$db_name."; host=".$db_host , $db_user, $db_password);

  $sql = $pdo -> query('SELECT * FROM usuario');

  $dados = $sql->fetchALL(pdo::FETCH_ASSOC);
  echo('<pre>');
  print_r($dados);
?>