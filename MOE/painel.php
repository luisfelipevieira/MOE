<?php
include('verifica_login.php');
include('conexao.php');

// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT idvaga, vaga, descricao, atividade, semestre, habilidades, horas, remuneracao FROM vaga");
$dados = mysqli_query($conexao, $query);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);


?>
<h3 class="title has-text-grey">Olá, <?php echo $_SESSION['nome'];?></h3>
<h5><a href="logout.php">Sair</a></h5>
<div class="box">
    <form action="interesse.php" method="POST">
        <div class="field">
            <div class="control">
                <h3 class="label">Confirme seu e-mail para visualizar seus interesses</a></h3>
                <input name="usuario" name="text" class="input is-large" placeholder="E-mail" autofocus="">
            </div>
        </div>

        <button type="submit" class="button is-block is-link is-large">Visualizar interesses</button>
    </form>
</div>

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
$result_vagas = "select * from vaga";
$resultado_vaga = mysqli_query($conexao, $result_vagas);
?>


<?php
    while($row_vaga = mysqli_fetch_assoc($resultado_vaga)){
        echo "Código: " . $row_vaga['idvaga'] . "<br>";
        echo "Vaga: " . $row_vaga['vaga'] . "<br>";
        echo "Descrição: " . $row_vaga['descricao'] . "<br>";
        echo "Atividade: " . $row_vaga['atividade'] . "<br>";
        echo "Semestre: " . $row_vaga['semestre'] . "<br>";
        echo "Habilidades: " . $row_vaga['habilidades'] . "<br>";
        echo "Horas: " . $row_vaga['horas'] . "<br>";
        echo "Remuneração: " . $row_vaga['remuneracao'] . "<br><hr>"; 
    }
?>

<div class="box">
    <form action="favoritar_vaga.php" method="POST">
        <div class="field">
            <div class="control">
                <h3 class="label">Digite o código da vaga em que deseja cadastrar interesse</a></h3>
                <input name="idvaga" type="int" class="input is-large" placeholder="Código da vaga" autofocus>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <h3 class="label">Confirme seu e-mail</a></h3>
                <input name="usuario" name="text" class="input is-large" placeholder="E-mail" autofocus="">
            </div>
        </div>

        <button type="submit" class="button is-block is-link is-large">Cadastrar</button>
    </form>
</div>

</body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>