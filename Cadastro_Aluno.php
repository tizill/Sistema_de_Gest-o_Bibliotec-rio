<?php include_once "testeDeSession.php"; ?>
<?php include_once "conexoes/DeUp.php"; ?>
<?php if($_SESSION['idUsuario'] == 1){include_once "header.html";}else{include_once "header_Func.php";}?>

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
    <title>Cadastro de Aluno</title>
</head>
<body>
<center><h1>Cadastro de Alunos: </h1></center>
    <div class="container border border-2 espacamento">
        <div class="container espacamento">
      <h1>Alunos Cadastrados:</h1>
    <table class="table table-striped table-hover boderTable">
    <?php 
    $i = 0;
     echo "<tr><th class='colorRed'>NOME: </th><th class='colorRed'>CPF: </th><th class='colorRed'></th><th class='colorRed'></th></tr>"; 
     while ($consulta = $select_Aluno->fetch(PDO::FETCH_ASSOC)){
      echo "<tr><th>$consulta[nome]</th><th>$consulta[cpf] </th><th>$consulta[volume]<a href='formEditar_Aluno.php?id_aluno=$consulta[id_aluno]' class='maginRigth'>Editar </a><a onclick='return confirmacaoDelete()' href='conexoes/Deletar_Aluno.php?id_aluno=$consulta[id_aluno]' class='maginRigth link-danger'>Excluir</a><a href='Descricao_Aluno.php?id_aluno=$consulta[id_aluno]' class='maginRigth'>Mais...</a> </th> <th></th></tr>"; 
    $i++;      
     }
     
     echo "<h4> TOTAL DE CADASTROS: <i>$i REALIZADOS</i></h4>";
     ?>
      </table>
      <br>
   </div>
   <center><a href="cadastrar_Aluno.php">Click aqui para cadastrar um novo aluno.</a></center>
    </div>
</body>
</html>