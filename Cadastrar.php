<?php include_once "testeDeSession.php"; ?>
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
    <title>Cadastro</title>
</head>
<body>
    <div class="container border border-2 espacamento">
        <h1>Cadastrar Livros: </h1>
    <form class="row g-3" action="conexoes/insert.php" method="POST">
        <div class="col-md-6" >
        <label for="nome" class="form-label">Nome do Livro: </label>
        <input type="text" name="nome" id="nome" placeholder="Harry Potter ..." class="form-control" onblur="formatanome(this.value)" required> 
        </div>
        <br>
        <br>


        <div class="col-md-6">
        <label for="email" class="form-label">Autor: </label>
        <input type="email" name="autor" id="autor" placeholder="@exemplo@gmail.com" class="form-control" onblur="Formatanome(this.value)" required>
        </div>


       
        
        <div class="col-md-2">
        <label class="form-label" for="CPF">Sinopse: <h11>*</h11></label> 
        <input type="text" name="sinopse" id="sinopse" placeholder="Descrição do Filme" class="form-control input-md" required>
        </div>

        
        <div class="col-md-2">
        <label class="form-label" for="celular">Editora: <h11>*</h11></label>  
        <input type="text" name="editora" id="editora" placeholder="Caçadores de Tarados" class="form-control input-md" required>
        </div>

        <div class="col-md-2">
        <label class="form-label" for="N°_Paginas"> N° de Paginas: *</label>
        <input type="number" name="paginas" id="paginas" class="form-control input-md " require>
        </div>

        <div class="form-group col-md-12 espacamento">
        <label class="form-label" for="CPF">Status: <h11>*</h11></label>
        </div>
        <div class="col-md-2">  
        <input type="radio" name="status" id="sexoMasc" value="Disponivel" required>Disponivel <br>
        <input type="radio" name="status" id="sexoFem" value="Indisponivel" required>Indisponivel <br>
        </div>

        <div class="col-12 espacamento">
           <button type="submit" class="btn btn-primary">Cadastrar</button>
           <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
        </div>
   <center><a href="cadastrosClientes.php">Voltar.</a></center>
    </div>
    </form>
    </div>
</body>
</html>