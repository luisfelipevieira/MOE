<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$curso = mysqli_real_escape_string($conexao, trim($_POST['curso']));
$ano_ingresso = mysqli_real_escape_string($conexao, trim($_POST['ano_ingresso']));
$minicurriculo = mysqli_real_escape_string($conexao, trim($_POST['minicurriculo']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$senhaConfirma = mysqli_real_escape_string($conexao, trim($_POST['senha_confirma']));


    if ($senha != $senhaConfirma) {
        header('Location: erro.php');
        throw new Exception("Mensagem de erro");
        exit;
    }

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (usuario, senha, nome, ano_ingresso, curso, minicurriculo) 
        VALUES ('$usuario', '$senha', '$nome', '$ano_ingresso', '$curso', '$minicurriculo')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>