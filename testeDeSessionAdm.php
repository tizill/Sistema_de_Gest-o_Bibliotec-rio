<?php 
 
 session_start();
 if (!isset($_SESSION['idUsuario']) || $_SESSION['idUsuario'] != 1){
    header("location:index.php");
    session_destroy();
    exit;
 }


?>