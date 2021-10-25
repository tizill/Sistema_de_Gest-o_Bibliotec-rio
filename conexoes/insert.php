<?php
include_once "conexao.php";
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

    $inserir = $conexao -> prepare('INSERT INTO tb_livro(nome, autor, paginas, sinopse, id_editora, statos) VALUES (:nome, :autor, :paginas, :sinopse, :id_editora, :statos)');
    $inserir->execute(array(
        ':nome' => $nome_frm,
        ':autor' => $autor_frm,
        ':paginas' => $paginas_frm,
        ':sinopse' => $sinopse_frm,
        ':id_editora' => $editora_frm,
        ':statos' => $status_frm
    ));
    
   require_once "../alert/alert.html";
}catch(PDOException $e){

echo 'Error: ' . $e->getMessage();

}
?>