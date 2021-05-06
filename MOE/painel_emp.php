<?php
include('verifica_login_emp.php');
?>
 
<h2>Olá, <?php echo $_SESSION['nome_empresa'];?></h2>
<h2><a href="logout.php">Sair</a></h2>