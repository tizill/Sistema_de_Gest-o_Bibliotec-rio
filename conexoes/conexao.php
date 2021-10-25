<?php

try {
  //conexãp com o banco de dados atravez do PDO 
  $conexao = new PDO('mysql:host=localhost;dbname=db_biblioteca', "root", "");
  //passagem da conexão ao banco de dados para relatorios de erros 
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
   //Caso ocorra algum erro ao conectar ao banco de dados o PDOException relatara o erro 
    echo 'ERROR: ' . $e->getMessage();

}
?>


