<?php include_once "header.html";?>
<?php include_once "conexoes/conexao.php";
   $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
   $consulta = $conexao->query("SELECT * FROM tb_livro WHERE id_livro = $id");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<?php include_once "testeDeSession.php" ?>
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
        <h1>Editar Livro: </h1>
    <form class="row g-3" action="conexoes/update.php" method="POST">
        <div class="col-md-6" >
        <label for="nome" class="form-label">Nome do Livro: </label>
        <input type="hidden" name="id" value="<?php echo $linha['id_livro']?>">
        <input type="text" name="nome" value="<?php echo $linha['nome'];?>" id="nome" placeholder="Harry Potter ..." class="form-control" onblur="formatanome(this.value)" required> 
        </div>
        <br>
        <br>


        <div class="col-md-6">
        <label for="email" class="form-label">Autor: </label>
        <input type="email" name="autor" value="<?php echo $linha['autor'];?>" id="autor" placeholder="@exemplo@gmail.com" class="form-control" onblur="Formatanome(this.value)" required>
        </div>


       
        
        <div class="col-md-2">
        <label class="form-label" for="CPF">Sinopse: <h11>*</h11></label> 
        <input type="text" name="sinopse" value="<?php echo $linha['sinopse'];?>" id="sinopse" placeholder="Descrição do Filme" class="form-control input-md" required>
        </div>

        
        <div class="col-md-2">
        <label class="form-label" for="celular">Editora: <h11>*</h11></label>  
        <input type="text" name="editora" id="editora" <?php echo $linha['id_editora'];?> placeholder="Caçadores de Tarados" class="form-control input-md" required>
        </div>

        <div class="col-md-2">
        <label class="form-label" for="N°_Paginas"> N° de Paginas: *</label>
        <input type="number" name="paginas" <?php echo $linha['paginas'];?> id="paginas" class="form-control input-md " require>
        </div>

        <div class="form-group col-md-12 espacamento">
        <label class="form-label" for="CPF">Status: <h11>*</h11></label>
        </div>
        <div class="col-md-2">  
        <input type="radio" name="status" id="sexoMasc" value="Disponivel" required>Disponivel <br>
        <input type="radio" name="status" id="sexoFem" value="Indisponivel" required>Indisponivel <br>
        </div>

        <div class="col-12 espacamento">
           <button type="submit" class="btn btn-primary">Editar</button>
           <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
        </div>
   <center><a href="cadastrosClientes.php">Voltar.</a></center>
    </div>
    </form>
    </div>
</body>
</html>