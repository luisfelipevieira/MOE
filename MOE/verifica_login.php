<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: index_est.php');
	exit();
}