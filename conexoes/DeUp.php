<?php
include_once "conexoes/conexao.php";


try {
    
    $select = $conexao->query("SELECT * FROM tb_livro");
    $select_Func = $conexao->query("SELECT * FROM tb_funcionario");
    $select_Aluno = $conexao->query("SELECT * FROM tb_aluno");
    $select_Livro = $conexao->query("SELECT * FROM tb_livro");
    $select_Emprestimo = $conexao->query("SELECT * FROM tb_emprestimo");

} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
