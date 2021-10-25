<?php include_once "testeDeSession.php"; ?>
<?php include_once "header_Func.php";?>
<?php include_once "conexoes/conexao.php";
?>
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
    <title>Efetuar Emprestimo de Livro</title>
</head>
<body>
<div class="container border border-2 espacamento">
        <div class="container espacamento">
      <h1>Emprestimo:</h1>
<form class="row g-3" action="conexoes/insert_ItemEmprestimo.php" id="FormEmprestimo" method="POST">
        <div class="col-md-6" >
        <label for="nome" class="form-label">Selecionar Emprestimo: </label>
        <select name="select_Emprestimo" class="form-select" aria-label="Default select example" required>
        <option selected required>Selecione um Emprestimo</option>
          <?php while ($consulta = $select_Emprestimo->fetch(PDO::FETCH_ASSOC)){
            echo "<option id=$consulta[id_emprestimo] name=$consulta[id_emprestimo] value=$consulta[id_emprestimo]>$consulta[nome]</option>";
          };?>
          </select>
        </div>
        <br>
        <br>


        <div class="col-md-6">
        <label for="email" class="form-label">Selecionar livro: </label>
        <select name="select_Livro" class="form-select" aria-label="Default select example" required>
        <option selected>Selecione um Livro</option>
          <?php while ($consulta = $select_Livro->fetch(PDO::FETCH_ASSOC)){
            echo "<option id=$consulta[id_livro] name=$consulta[id_livro] value=$consulta[id_livro]>$consulta[nome]</option>";
          };?>
          </select>
        </div>


        <?php echo "<option id=$consulta[id_livro] name=$consulta[id_livro] value=$consulta[id_livro]>$consulta[nome]</option>";?>
        <div class="col-md-2">
        <label class="form-label" for="senha">DEVOLUÇÃO: <h11>*</h11></label>  
        <input type="date" name="devolucao" id="devolucao" class="form-control input-md" required>
        </div>



        <div class="col-12 espacamento">
           <button type="submit" class="btn btn-primary">Proximo</button>
           <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
        </div>
   <center><a href="Emprestimo_Livro.php">Voltar.</a></center>
    </div>
    </form>
    </div>
</body>
</html>