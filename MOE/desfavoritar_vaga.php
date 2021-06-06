<?php
session_start();
include("conexao.php");

$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$idvaga = mysqli_real_escape_string($conexao, trim($_POST['idvaga']));


$sql = "DELETE FROM interesse WHERE (idvaga = '{$idvaga}' AND usuario = '{$usuario}')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: painel.php');
exit;
?>