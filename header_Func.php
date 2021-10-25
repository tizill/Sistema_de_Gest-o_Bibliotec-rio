<?php include_once "conexoes/DeUp.php";?>
<?php include_once "testeDeSession.php";?>

<?php $consulta = $_SESSION['idUsuario'];?>
<header>
    <div class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="Funcionario_Index.php">Pagina Incial</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="Cadastro_Aluno.php">Cadastro de Aluno</a>
              </li>
              <li class="nav-item">
             <?php echo "<a class='nav-link' href='Emprestimo_Livro.php?id=$consulta'>Emprestimo Livro</a> "?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sessionDestroy.php">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
</header>
