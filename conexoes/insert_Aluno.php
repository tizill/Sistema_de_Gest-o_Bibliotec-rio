<?php
include_once "conexao.php";
$nome_frm = $_POST["nome"];
$cpf_frm = $_POST["cpf"];
$celular_frm = $_POST["celular"];


try{

    $inserir = $conexao -> prepare('INSERT INTO tb_aluno(nome, cpf, telefone) VALUES (:nome,:cpf,:telefone)');
    $inserir->execute(array(
        ':nome' => $nome_frm,
        ':cpf' => $cpf_frm,
        ':telefone' =>$celular_frm 
    ));
    
   require_once "../alert/alert.html";
}catch(PDOException $e){

echo 'Error: ' . $e->getMessage();

}
?>