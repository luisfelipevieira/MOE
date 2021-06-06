<?php
session_start();
include("conexao.php");

$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$idvaga = mysqli_real_escape_string($conexao, trim($_POST['idvaga']));

//

$result_vaga = "select vaga from vaga where idvaga = '{$idvaga}'";
$resultados_vaga = mysqli_query($conexao, $result_vaga);
$resultado_vaga = mysqli_fetch_assoc($resultados_vaga);

$result_descricao = "select descricao from vaga where idvaga = '{$idvaga}'";
$resultados_descricao = mysqli_query($conexao, $result_descricao);
$resultado_descricao = mysqli_fetch_assoc($resultados_descricao);

$result_atividade = "select atividade from vaga where idvaga = '{$idvaga}'";
$resultados_atividade = mysqli_query($conexao, $result_atividade);
$resultado_atividade = mysqli_fetch_assoc($resultados_atividade);

$result_semestre = "select semestre from vaga where idvaga = '{$idvaga}'";
$resultados_semestre = mysqli_query($conexao, $result_semestre);
$resultado_semestre = mysqli_fetch_assoc($resultados_semestre);

$result_habilidades = "select habilidades from vaga where idvaga = '{$idvaga}'";
$resultados_habilidades = mysqli_query($conexao, $result_habilidades);
$resultado_habilidades = mysqli_fetch_assoc($resultados_habilidades);

$result_horas = "select horas from vaga where idvaga = '{$idvaga}'";
$resultados_horas = mysqli_query($conexao, $result_horas);
$resultado_horas = mysqli_fetch_assoc($resultados_horas);

$result_remuneracao = "select remuneracao from vaga where idvaga = '{$idvaga}'";
$resultados_remuneracao = mysqli_query($conexao, $result_remuneracao);
$resultado_remuneracao = mysqli_fetch_assoc($resultados_remuneracao);
//
$sql = "INSERT INTO interesse (usuario, idvaga, vaga, descricao, atividade, semestre, habilidades, horas, remuneracao)
         VALUES ('$usuario', '$idvaga', '$resultado_vaga', '$resultado_descricao', '$resultado_atividade', '$resultado_semestre', '$resultado_habilidades', '$resultado_horas', '$resultado_remuneracao')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: painel.php');
exit;
?>