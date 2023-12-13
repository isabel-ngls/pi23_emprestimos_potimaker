<?php
require "config.php";
session_start();

if(!isset($_SESSION["matricula"])){
    header("Location: index.php");
}



?>