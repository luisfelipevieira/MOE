<?php
session_start();
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
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro - Estagiário</h3>
                    <h3 class="title has-text-grey"><a>Mural de Oportunidades de Estágio</a></h3>
                    

                    
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="curso" type="text" class="input is-large" placeholder="Curso" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="ano_ingresso" type="text" class="input is-large" placeholder="Ano de ingresso" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="minicurriculo" type="text" class="input is-large" placeholder="Minicurrículo" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                            <p><a href="index_est.php">Fazer login</a></p>
                            <p><a href="primeira.php">Início</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>