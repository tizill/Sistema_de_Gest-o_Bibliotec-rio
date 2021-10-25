<?php
include_once "conexao.php";
include_once "../testeDeSession.php";
$id_Emprestimo = $_POST["select_Emprestimo"];
$id_Livro = $_POST["select_Livro"];
$Devolucao = $_POST["devolucao"];


try{

    $inserir = $conexao -> prepare('INSERT INTO tb_itememprestimo(id_Emprestimo, id_livro, devolucao) VALUES (:id_Emprestimo, :id_livro, :devolucao)');
    $inserir->execute(array(
        ':id_Emprestimo' => $id_Emprestimo,
        ':id_livro' => $id_Livro,
        ':devolucao' => $Devolucao
    ));
    
    echo ("<center>Emprestimo Realizado<center/><br><center><a href=../Funcionario_Index.php>Voltar.</a></center>");
}catch(PDOException $e){

echo 'Error: ' . $e->getMessage();

}
?>