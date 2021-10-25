<?php
include_once "conexao.php";
$id = filter_var($_GET["id_funcionario"], FILTER_SANITIZE_NUMBER_INT);

try{

    $delete = $conexao -> prepare('DELETE FROM tb_funcionario WHERE id_funcionario = :id_funcionario');
    $delete->execute(array(
        ':id_funcionario' => $id
    )); 
    
   require_once "../alert/alert2.html";
}catch(PDOException $e){

echo 'Error: ' . $e->getMessage();

}
?>