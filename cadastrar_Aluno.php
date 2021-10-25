<?php include_once "testeDeSession.php"; ?>
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
    <title>Cadastrar Aluno</title>
</head>
<body>
<div class="container border border-2 espacamento">
        <div class="container espacamento">
      <h1>Cadastrar Aluno:</h1>
<form class="row g-3" action="conexoes/insert_aluno.php" id="FormAluno" method="POST">
        <div class="col-md-6" >
        <label for="nome" class="form-label">Nome do Aluno: </label>
        <input type="text" name="nome" id="nome" placeholder="João da Rocinha ..." class="form-control" onblur="formatanome(this.value)" required> 
        </div>
        <br>
        <br>

       
        
        <div class="col-md-2">
        <label class="form-label" for="CPF">CPF: <h11>*</h11></label> 
        <input type="text" name="cpf" id="cpf" placeholder="624.266.703-71" maxlength="14" class="form-control input-md" required>
        </div>

        

        <div class="form-group col-md-2 espacamento">
        <label class="form-label" for="celular">Celular: <h11>*</h11></label>
        <input type="text" name="celular" id="celular" placeholder="(99)9 8191-1300" class="form-control input-md " required><br>
        </div>

        <div class="col-12 espacamento">
           <button type="submit" class="btn btn-primary">Cadastrar</button>
           <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
        </div>
   <center><a href="Cadastro_Aluno.php">Voltar.</a></center>
    </div>
    </form>
    </div>
</body>
</html>