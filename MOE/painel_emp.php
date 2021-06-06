<?php
include('verifica_login_emp.php');
?>
<!DOCTYPE html>
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
    <h5>Olá, <?php echo $_SESSION['nome_empresa'];?></h5>
    <h2><a href="logout.php">Sair</a></h2>

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastrar vaga</h3>
                    
                    

                    
                    <div class="box">
                        <form action="cadastrar_vaga.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="vaga" type="text" class="input is-large" placeholder="Vaga" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="descricao_vaga" type="text" class="input is-large" placeholder="Descrição da vaga" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="atividade_vaga" type="text" class="input is-large" placeholder="Atividade a ser realizada" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="semestre_vaga" type="int" class="input is-large" placeholder="Semestre requerido" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="habilidades_vaga" type="text" class="input is-large" placeholder="Habilidades">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="horas_vaga" class="input is-large" type="int" placeholder="Horas">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="remuneracao_vaga" class="input is-large" type="float" placeholder="Remuneração">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar vaga</button>
                            <p><a href="painel_emp.php">Limpar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>