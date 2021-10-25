<?php include_once "testeDeSession.php"; ?>
<?php include_once "header_Func.php";?>
<?php include_once "conexoes/DeUp.php";?>
<?php include_once "conexoes/conexao.php";
   $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
   $consulta = $conexao->query("SELECT * FROM tb_funcionario WHERE id_funcionario = $id");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>

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
<form class="row g-3" action="conexoes/insert_Emprestimo.php" id="FormEmprestimo" method="POST">
        <div class="col-md-6" >
        <label for="nome" class="form-label">Nome do Funcionario: </label>
        <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'];?>" class="form-control" onblur="formatanome(this.value)" required> 
        </div>
        <br>
        <br>


        <div class="col-md-6">
        <label for="email" class="form-label">Aluno(a): </label>
        <select name="select" class="form-select" aria-label="Default select example" required>
        <option selected>Selecione um Aluno(a)</option>
          <?php while ($consulta = $select_Aluno->fetch(PDO::FETCH_ASSOC)){
            echo "<option id=$consulta[id_aluno] name=$consulta[id_aluno] value=$consulta[id_aluno]>$consulta[nome]</option>";
          };?>
          </select>
        </div>


       
        
        <div class="col-md-2">
        <label class="form-label" for="CPF">DATA: <h11>*</h11></label> 
        <input type="date" name="data" id="data" class="form-control input-md" required>
        </div>

        
        <div class="col-md-2">
        <label class="form-label" for="senha">DEVOLUÇÃO: <h11>*</h11></label>  
        <input type="date" name="devolucao" id="devolucao" class="form-control input-md" required>
        </div>



        <div class="col-12 espacamento">
           <button type="submit" class="btn btn-primary">Proximo</button>
           <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
        </div>
    </div>
    </form>
    </div>
</body>
</html>