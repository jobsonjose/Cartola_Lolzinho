<?php 
	session_start();

	if (!isset($_SESSION['Nomes'])) {
		$_SESSION['Nomes'] = array();
	}
	if (!isset($_SESSION['Jogadores'])) {
		$_SESSION['Jogadores'] = array();
	}
	if (!isset($_SESSION['Senhas'])) {
		$_SESSION['Senhas'] = array();
	}
	if (!isset($_SESSION['Lines'])) {
		$_SESSION['Lines'] = array();
	}
	if (!isset($_SESSION['Email'])) {
		$_SESSION['Email'] = array();
	}

	$_SESSION['Nomes'][] = $_POST['nome'];
	$_SESSION['Jogadores'][] = $_POST['nick'];
	$_SESSION['Senhas'][] = $_POST['senha'];
	$_SESSION['Lines'][] = $_POST['line'];
	$_SESSION['Email'][] = $_POST['email'];
	header("location: Home.php");


 ?>