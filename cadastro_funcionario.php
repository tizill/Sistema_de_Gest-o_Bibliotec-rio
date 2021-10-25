<?php include_once "testeDeSessionAdm.php";?>
<?php include_once "conexoes/DeUp.php"; ?>
<?php include_once "header.html";?>

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
    <title>Cadastro de Funcionarios</title>
</head>
<body>
<center><h1>Cadastro de funcionarios: </h1></center>
    <div class="container border border-2 espacamento">
        <div class="container espacamento">
      <h1>Funcionarios Cadastrados:</h1>
    <table class="table table-striped table-hover boderTable">
    <?php 
    $i = 0;
     echo "<tr><th class='colorRed'>NOME: </th><th class='colorRed'>CPF: </th><th></th><th class='colorRed'></th></tr>"; 
     while ($consulta = $select_Func->fetch(PDO::FETCH_ASSOC)){
      echo "<tr><th>$consulta[nome]</th><th>$consulta[cpf] </th><th>$consulta[volume]<a href='formEditar_Func.php?id=$consulta[id_funcionario]' class='maginRigth'>Editar </a><a onclick='return confirmacaoDelete()' href='conexoes/Deletar_Func.php?id_funcionario=$consulta[id_funcionario]' class='maginRigth link-danger'>Excluir</a><a href='Descricao_Func.php?id_funcionario=$consulta[id_funcionario]' class='maginRigth'>Mais...</a> </th></tr>"; 
    $i++;      
     }
     
     echo "<h4> TOTAL DE CADASTROS: <i>$i REALIZADOS</i></h4>";
     ?>
      </table>
      <br>
   </div>
   <center><a href="cadastrar_Funcionario.php">Click aqui para cadastrar um novo funcionario.</a></center>
    </div>
</body>
</html>