<?php 
	session_start();
	if (in_array($_POST['nick'], $_SESSION['Jogadores'])) {
		if (in_array($_POST['senha'], $_SESSION['Senhas'])) {

			header("location: Usuario.php");
		}
	}else{
		header("location: Home.php");
	}
?>