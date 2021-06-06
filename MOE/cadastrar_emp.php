<?php
session_start();
include("conexao.php");

$nome_empresa = mysqli_real_escape_string($conexao, trim($_POST['nome_empresa']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$nome_pessoa = mysqli_real_escape_string($conexao, trim($_POST['nome_pessoa']));
$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));

$sql = "select count(*) as total from empregador where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro_emp.php');
    exit;
}

$sql = "INSERT INTO empregador (nome_empresa, endereco, nome_pessoa, descricao, usuario, senha)
         VALUES ('$nome_empresa', '$endereco', '$nome_pessoa', '$descricao', '$usuario', '$senha')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro_emp.php');
exit;
?>