<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Criar Conta</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="lol.css">
</head>
<body>
	<?php include 'asset/Menu.php'; ?>
	<center><div id="form">
		<h3>Criando uma nova conta</h3>
		<form action="registro.php" method="POST">
			<label>Nome :</label>
			<input type="text" name="nome" placeholder="Nome do Usuario">
			<br>
			<label>Nick :</label>
			<input type="text" name="nick" placeholder="Nome do Jogador">
			<br>
			<label>Email :</label>
			<input type="text" name="email" placeholder="Digite seu Email">
			<br>
			<label>Senha :</label>
			<input type="password" name="senha" placeholder="Digite sua Senha">
			<br>
			<label>Qual a sua melhor Line ?</label>
			<br>
			<select name="Line">
				<option value="Top">Top</option>
				<option value="Mid">Mid</option>
				<option value="Bot">Bot</option>
				<option value="Jungle">Jungle</option>				
			</select>
			<br>
			<center><label>Conteudo a ser inserido</label></center>

			<input type="submit" name="Enviar">
		</form>
	</div></center>



</body>
</html>