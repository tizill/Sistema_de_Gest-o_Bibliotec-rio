<?php 
 
 session_start();
 if (!isset($_SESSION['idUsuario'])){
    header("location:index.php");
    exit;
 }


?>