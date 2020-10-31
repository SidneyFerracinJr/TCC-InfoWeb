<?php
session_start();
include_once("conexao.php");
    $email =filter_input(INPUT_POST,email, FILTER_SANITIZE_EMAIL);
    $senha =filter_input(INPUT_POST,senha, FILTER_SANITIZE_STRING);
    $nome =filter_input(INPUT_POST,nome, FILTER_SANITIZE_STRING);

$result = "INSERT INTO usuarios(email,senha,nome) VALUES('$email','$senha','$nome')";
$result_U = mysqli_query($conn, $result);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>usuario cadastrado com sucesso</p>";
    header("location: ../index.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>usuario nao cadastrado</p>";
    header("location: ../criaConta.php");
}

?>