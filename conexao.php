<?php
  global $conexao;
  try{

      $conexao = new PDO('mysql:host=localhost;dbname=db_biblioteca; ',"root", "");
      $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   

  }catch(PDOException $e){
    echo 'ERROR: ' . $e->getMessage();
  }


?>



