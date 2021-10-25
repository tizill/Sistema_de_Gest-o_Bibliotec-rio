<?php

class Usuario {
    public function login ($email, $senha){
        global $conexao;
        $select = "SELECT * FROM tb_funcionario WHERE email = :email AND senha = :senha" ;
        $select = $conexao -> prepare($select);
        $select -> bindValue("email", $email);
        $select -> bindValue("senha", md5($senha));
        $select -> execute();

        if($select -> rowCount() > 0){
            $dado = $select -> fetch();
                $_SESSION['idUsuario'] = $dado['id_funcionario'];
            return true;
        }else{
            return false;
        }

    }
}

?>