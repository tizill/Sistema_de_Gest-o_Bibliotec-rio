<?php
include_once "conexao.php";
$id = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);
$nome_frm = $_POST["nome"];
$autor_frm = $_POST["autor"];
$sinopse_frm = $_POST["sinopse"];
$editora_frm = $_POST["editora"];
$status_frm = $_POST["status"];
$paginas_frm = $_POST["paginas"];
if($status_frm == "Disponivel"){
    $status_frm = 1;
}else{
    $status_frm = 0;
}

try{

    $update = $conexao -> prepare('UPDATE tb_livro SET nome = :nome, autor = :autor, sinopse = :sinopse, id_editora = :editora, statos = :statos, paginas = :paginas WHERE id_livro = :id');
    $update->execute(array(
        ':id' => $id,
        ':nome' => $nome_frm,
        ':autor' => $autor_frm,
        ':sinopse' => $sinopse_frm,
        ':editora' => $editora_frm,
        ':statos' => $status_frm,
        ':paginas' => $paginas_frm
    ));
    
   require_once "../alert/alert3.html";
}catch(PDOException $e){

echo 'Error: ' . $e->getMessage();

}
?>