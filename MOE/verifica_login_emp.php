<?php
session_start();
if(!$_SESSION['nome_empresa']) {
	header('Location: index_emp.php');
	exit();
}