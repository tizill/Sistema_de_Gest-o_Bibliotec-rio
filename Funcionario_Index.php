<?php include_once "header_Func.php";?>
<?php include_once "conexoes/DeUp.php";?>
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
    <title>Pagina Do Funcionario</title>
</head>
<body>
<div class="container espacamento">
     <center> <h1>Emprestimos Pendentes:</h1> </center>
    <table class="table table-striped table-hover boderTable">
    <?php 
    $i = 0;
     echo "<tr><th class='colorRed'>NOME: </th><th class='colorRed'>DATA EMPRESTIMO: </th><th class='colorRed'>DATA DEVOLUCAO: </th><th class='colorRed'></th></tr>"; 
     while ($consulta = $select_Emprestimo->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><th>$consulta[nome]</th><th>$consulta[hora] </th><th>$consulta[devolucao]<a href='formEditar_Aluno.php?id_aluno=$consulta[id_aluno]' class='maginRigth'>Editar </a><a onclick='return confirmacaoDelete()' href='conexoes/Deletar_Aluno.php?id_aluno=$consulta[id_aluno]' class='maginRigth link-danger'>Excluir</a><a href='Descricao_Aluno.php?id_aluno=$consulta[id_aluno]' class='maginRigth'>Mais...</a> </th> <th></th></tr>"; 
        $i++;        
     }
     
     echo "<h4> TOTAL DE ALUNOS COM EMPRESTIMO: <i>$i REALIZADOS</i></h4>";
     ?>
      </table>
   </div>
</body>
</html>
