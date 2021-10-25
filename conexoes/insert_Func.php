<?php
include_once "conexao.php";
$nome_frm = $_POST["nome"];
$email_frm = $_POST["email"];
$cpf_frm = $_POST["cpf"];
$senha_frm = $_POST["senha"];
$login_frm = $_POST["login"];
$celular_frm = $_POST["celular"];


try{

    $inserir = $conexao -> prepare('INSERT INTO tb_funcionario(nome, email, cpf, senha, logon, telefone) VALUES (:nome, :email, :cpf, :senha, :logon, :telefone)');
    $inserir->execute(array(
        ':nome' => $nome_frm,
        ':email' => $email_frm,
        ':cpf' => $cpf_frm,
        ':senha' => $senha_frm,
        ':logon' => $login_frm,
        ':telefone' =>$celular_frm 
    ));
    
   require_once "../alert/alert.html";
}catch(PDOException $e){

echo 'Error: ' . $e->getMessage();

}
?>