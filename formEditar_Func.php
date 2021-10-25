<?php include_once "header.html";?>
<?php include_once "conexoes/conexao.php";
   $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
   $consulta = $conexao->query("SELECT * FROM tb_funcionario WHERE id_funcionario = $id");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<?php include_once "testeDeSessionAdm.php" ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="validacao.js"></script>
    <title>Editar Livro Cadastrado</title>
</head>
<body>
<div class="container border border-2 espacamento">
        <div class="container espacamento">
      <h1>Cadastrar Funcionario:</h1>
<form class="row g-3" action="conexoes/insert_func.php" id="FormFunc" method="POST">
        <div class="col-md-6" >
        <label for="nome" class="form-label">Nome do Funcionario: </label>
        <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'];?>" placeholder="João da Rocinha ..." class="form-control" onblur="formatanome(this.value)" required> 
        </div>
        <br>
        <br>


        <div class="col-md-6">
        <label for="email" class="form-label">Email: </label>
        <input type="email" name="email" id="email" value="<?php echo $linha['email'];?>" placeholder="@exemplo@gmail.com" class="form-control" onblur="validarEmail()" required>
        </div>


       
        
        <div class="col-md-2">
        <label class="form-label" for="CPF">CPF: <h11>*</h11></label> 
        <input type="text" name="cpf" id="cpf" value="<?php echo $linha['cpf'];?>" placeholder="624.266.703-71" maxlength="14" class="form-control input-md" required>
        </div>

        
        <div class="col-md-2">
        <label class="form-label" for="senha">Senha: <h11>*</h11></label>  
        <input type="password" name="senha" value="<?php echo $linha['senha'];?>" id="senha" placeholder="*******" class="form-control input-md" required>
        </div>

        <div class="col-md-2">
        <label class="form-label" for="ConfirmarSenha"> Confirma Senha: *</label>
        <input type="password" name="ConfirmarSenha" value="<?php echo $linha['senha'];?>" onblur="validarSenha();" id="ConfirmarSenha" class="form-control input-md " required>
        </div>

        <div class="col-md-2">
        <label class="form-label" for="login"> login: *</label>
        <input type="text" name="login" value="<?php echo $linha['logon'];?>" id="login" class="form-control input-md " required>
        </div>

        <div class="form-group col-md-2 espacamento">
        <label class="form-label" for="celular">Celular: <h11>*</h11></label>
        <input type="text" name="celular" value="<?php echo $linha['telefone'];?>" id="celular" placeholder="(99)9 8191-1300" class="form-control input-md " required><br>
        </div>

        <div class="col-12 espacamento">
           <button type="submit" class="btn btn-primary" onclick="validarSenha()">Cadastrar</button>
           <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
        </div>
   <center><a href="cadastro_funcionario.php">Voltar.</a></center>
    </div>
    </form>
    </div>
</body>
</html>