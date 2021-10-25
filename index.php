<?php include_once "conexao.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="login.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <title>Login no sistema</title>
</head>
<body>


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- ICONE -->
    <div style="margin-top : 10px;" class="fadeIn first">
      <h3> ENTRAR NO SISTEMA </h3>
    </div>

    <!-- Formulario login -->
    <form action="logar.php" method="POST">    
      <input type="text" id="email" name="email" class="fadeIn second" placeholder="login">
      <input type="password" name="senha" id="senha" class="fadeIn third" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Se o burrro do usuario estiver esquecido a senha -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Esqueceu sua senha?</a>
    </div>

  </div>
</div>
</body>
</html>