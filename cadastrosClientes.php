<?php include_once "header.html";?>
<?php 
 
 session_start();
 if (!isset($_SESSION['idUsuario'])){
    header("location:index.php");
    exit;
 }


?>
<?php include_once "conexoes/DeUp.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="validacao.js"></script>
    <title>Tela inicial</title>
</head>
<body>
    <div class="container espacamento">
     <center> <h1>Cadastros De Livros Realizados:</h1> </center>
    <table class="table table-striped table-hover boderTable">
    <?php 
    $i = 0;
     echo "<tr><th class='colorRed'>NOME: </th><th class='colorRed'>AUTOR: </th><th class='colorRed'>STATUS: </th><th class='colorRed'>VOLUME: </th></tr>"; 
     while ($consulta = $select->fetch(PDO::FETCH_ASSOC)){
      echo "<tr><th>$consulta[nome]</th><th>$consulta[autor] </th><th>$consulta[status]</th> <th>$consulta[volume]<a href='formEditar.php?id=$consulta[id_livro]' class='maginRigth'>Editar </a><a onclick='return confirmacaoDelete()' href='conexoes/Deletar.php?id=$consulta[id_livro]' class='maginRigth link-danger'>Excluir</a><a href=' DescricaoCliente.php?id=$consulta[id_livro]' class='maginRigth'>Mais...</a> </th></tr>"; 
    $i++;      
     }
     
     echo "<h4> TOTAL DE CADASTROS: <i>$i REALIZADOS</i></h4>";
     ?>
      </table>
   </div>
  <center> <a href="Cadastrar.php">Cadastrar Novo Livro</a> </center>
</body>
</html>