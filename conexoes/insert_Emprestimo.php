<?php
include_once "conexao.php";
include_once "../testeDeSession.php";
echo $_POST["id_aluno"];
$id_Funcionario = $_SESSION['idUsuario'];
$id_Aluno = $_POST["select"];
$data = $_POST["data"];
$Devolucao = $_POST["devolucao"];


try{
    //bloco para insersão do nome do emprestimo automatico no banco de dados de acordo com o nome do aluno
    $select_Aluno = $conexao->query("SELECT * FROM tb_aluno WHERE id_aluno = $id_Aluno");
    $linha = $select_Aluno->fetch(PDO::FETCH_ASSOC);
    $nome = $linha["nome"];
    //fim do bloco
    $inserir = $conexao -> prepare('INSERT INTO tb_emprestimo(id_aluno, nome, id_funcionario, hora, devolucao) VALUES (:id_aluno,:nome, :id_funcionario, :hora, :devolucao)');
    $inserir->execute(array(
        ':id_aluno' => $id_Aluno,
        ':nome' => $nome,
        ':id_funcionario' => $id_Funcionario,
        ':hora' => $data,
        ':devolucao' => $Devolucao
    ));
    
    header("location:../Item_Emprestimo.php");
}catch(PDOException $e){

echo 'Error: ' . $e->getMessage();

}
?>