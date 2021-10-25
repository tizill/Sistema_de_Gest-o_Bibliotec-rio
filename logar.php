<?php 
session_start();
if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["senha"]) && !empty($_POST["senha"])){
 
   include_once "conexao.php";
   include_once "Usuario.class.php";
 

    $email = addslashes($_POST["email"]);
    $senha = addslashes($_POST["senha"]);

    $u = new Usuario();
   if($u -> login($email, $senha) == true){
         if(isset($_SESSION['idUsuario'])){
          if($_SESSION['idUsuario'] == 1){
            header("location:cadastrosClientes.php");
         }else{
            header("location:Funcionario_index.php");
        }
         }else{
             header("location:index.php");
         }
   }else{
       header("location:index.php");
   }
   
}else{  
   header("location:index.php");
}


?>