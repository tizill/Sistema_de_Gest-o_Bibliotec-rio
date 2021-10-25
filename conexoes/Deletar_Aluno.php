<?php
include_once "conexao.php";
$id = filter_var($_GET["id_aluno"], FILTER_SANITIZE_NUMBER_INT);

try{

    $delete = $conexao -> prepare('DELETE FROM tb_aluno WHERE id_aluno = :id_aluno');
    $delete->execute(array(
        ':id_aluno' => $id
    )); 
    
   require_once "../alert/alert2.html";
}catch(PDOException $e){

echo 'Error: ' . $e->getMessage();

}
?>