
<?php

require 'config.php';

if(isset($_POST['cadastrar'])){

    $data_emprestimo = filter_input(INPUT_POST,'data_emprestimo');
    $data_devolucao = filter_input(INPUT_POST,'data_devolucao');
    $matricula_user = filter_input(INPUT_POST,'user');
    $isbn_apostila = filter_input(INPUT_POST,'isbn');

    // Verifique se a matrÃ­cula do usuÃ¡rio existe
    $sqlUser = $pdo->prepare("SELECT * FROM usuario WHERE matricula = :matricula");
    $sqlUser->bindValue(':matricula', $matricula_user);
    $sqlUser->execute();

    // Verifique se o ISBN da apostila existe
    $sqlIsbn = $pdo->prepare("SELECT * FROM apostila WHERE isbn = :isbn");
    $sqlIsbn->bindValue(':isbn', $isbn_apostila);
    $sqlIsbn->execute();

    if ($sqlUser->rowCount() == 0) {
        header("Location: emprestimo_add_front.php?alerta=Matrícula não encontrada");
    } elseif ($sqlIsbn->rowCount() == 0) {
        header("Location: emprestimo_add_front.php?alerta=Isbn não encontrado");
       
    } else {
     
        $sql = $pdo->prepare("INSERT INTO emprestimo_apostila (data_emprestimo, data_devolucao, matricula_usuario, isbn_apostila) VALUES (:data_emprestimo, :data_devolucao, :user, :isbn)");
        $sql->bindValue(':data_emprestimo', $data_emprestimo);
        $sql->bindValue(':data_devolucao', $data_devolucao);
        $sql->bindValue(':user', $matricula_user);
        $sql->bindValue(':isbn', $isbn_apostila);

        $sql->execute();
        header("Location: emprestimos_exibir.php");
    }
}
?>
