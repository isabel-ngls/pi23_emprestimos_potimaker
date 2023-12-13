<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");

    // no botão de logout, href-ar pra cá
?>

