<?php
include_once "conexao.php";
$id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);


try{

    $delete = $conexao -> prepare('DELETE FROM tb_livro WHERE id_livro = :id');
    $delete->execute(array(
        ':id' => $id
    )); 
    
   require_once "../alert/alert2.html";
}catch(PDOException $e){

echo 'Error: ' . $e->getMessage();

}
?>