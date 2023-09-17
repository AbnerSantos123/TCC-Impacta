<?php

$nome = $_POST["name"];
$email = $_POST["email"];
$psswd = $_POST["senha"];

include '../config.php';

function cadastrar($nome, $email, $psswd) {

    global $conexao_db;

    $sql = "INSERT INTO usuarios(nome, email, senha)
            VALUES('$nome', '$email', '$psswd')";

    $query = $conexao_db -> query($sql);

    if($query) {
        echo "Usuario cadastrado";
    } else {
        echo "Erro ao cadastrar";
    }

}

cadastrar($nome, $email, $psswd);

?>