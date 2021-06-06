<?php
include('verifica_login.php');
include('conexao.php');

$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT idvaga, vaga, descricao, atividade, semestre, habilidades, horas, remuneracao FROM interesse WHERE usuario = '{$usuario}'");
$dados = mysqli_query($conexao, $query);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

?>
<h3 class="title has-text-grey">Olá, <?php echo $_SESSION['nome'];?></h3>

<p><a href="painel.php">Início</a></p>
<h5><a href="logout.php">Sair</a></h5>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - MOE</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>


<body>
<h4 class="title has-text-grey">.</a></h4>
<h3 class="subtitle has-text-grey">Mural de Oportunidades de Estágio - Vagas</a></h3>

<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
$result_vagas = "select * from interesse WHERE usuario = '{$usuario}'";
$resultado_vaga = mysqli_query($conexao, $result_vagas);
?>


<?php
    while($row_interesse = mysqli_fetch_assoc($resultado_vaga)){
        echo "Código: " . $row_interesse['idvaga'] . "<br>";
        echo "Vaga: " . $row_interesse['vaga'] . "<br>";
        echo "Descrição: " . $row_interesse['descricao'] . "<br>";
        echo "Atividade: " . $row_interesse['atividade'] . "<br>";
        echo "Semestre: " . $row_interesse['semestre'] . "<br>";
        echo "Habilidades: " . $row_interesse['habilidades'] . "<br>";
        echo "Horas: " . $row_interesse['horas'] . "<br>";
        echo "Remuneração: " . $row_interesse['remuneracao'] . "<br><hr>"; 
    }
?>

<div class="box">
    <form action="desfavoritar_vaga.php" method="POST">
        <div class="field">
            <div class="control">
                <h3 class="label">Digite o código da vaga em que deseja descadastrar interesse</a></h3>
                <input name="idvaga" type="int" class="input is-large" placeholder="Código da vaga" autofocus>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <h3 class="label">Confirme seu email</a></h3>
                <input name="usuario" name="text" class="input is-large" placeholder="E-mail" autofocus="">
            </div>
        </div>

        <button type="submit" class="button is-block is-link is-large">Descadastrar</button>
    </form>
</div>

</body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>