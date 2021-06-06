<?php
session_start();
include("conexao.php");

$vaga = mysqli_real_escape_string($conexao, trim($_POST['vaga']));
$descricao_vaga = mysqli_real_escape_string($conexao, trim($_POST['descricao_vaga']));
$atividade_vaga = mysqli_real_escape_string($conexao, trim($_POST['atividade_vaga']));
$semestre_vaga = mysqli_real_escape_string($conexao, trim($_POST['semestre_vaga']));
$habilidades_vaga = mysqli_real_escape_string($conexao, trim($_POST['habilidades_vaga']));
$horas_vaga = mysqli_real_escape_string($conexao, trim($_POST['horas_vaga']));
$remuneracao_vaga = mysqli_real_escape_string($conexao, trim($_POST['remuneracao_vaga']));




$sql = "INSERT INTO vaga (vaga, descricao, atividade, semestre, habilidades, horas, remuneracao)
         VALUES ('$vaga', '$descricao_vaga', '$atividade_vaga', '$semestre_vaga', '$habilidades_vaga', '$horas_vaga', '$remuneracao_vaga')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: painel_emp.php');
exit;
?>