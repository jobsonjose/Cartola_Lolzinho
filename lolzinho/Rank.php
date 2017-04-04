<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="lol.css">
	<title>Nosso LoL</title>
	<link rel="stylesheet" type="text/css" href="lol.css">
</head>
<body>
 <?php include 'asset/Menu.php'; ?>
 <div class="well"><center><h2>Rank em teste</h2></center></div>
 <aside>
 	<ul class="RankAS">
 		<li><a href="Rank.php"><button type="button" class="btn btn-danger">Time</button></a></li>
 		<li><a href="#"><button type="button" class="btn btn-danger">Jogadores</button></a></li>
 		<li><a href="#"><button type="button" class="btn btn-danger">Jogadas</button></a></li>
 		<li><a href="#"><button type="button" class="btn btn-danger">Campeões</button></a></li>
 	</ul>
 </aside>
 <section>
 <?php 
 	$time = array(
 		array("Time" => "Pain", "Valor" => 354,00, "Colocacao" => 1),
 		array("Time" => "CNB", "Valor" => 239,00, "Colocacao" => 2),
 		array("Time" => "HeroeStorm", "Valor" => 140,00, "Colocacao" => 3),
 		array("Time" => "Helps", "Valor" => 87,00, "Colocacao" => 4),);
 ?>
 	<table class="Ranktb">
 		<tr>
 			<th>Nome do Time</th>
 			<th>Valor do Time</th>
 			<th>colocaçao do Time</th>
 		</tr>
 	    <tr>
 	    	<?php  for ($i = 0; $i < count($time); $i++) { 
 	    		$nome = $time[$i]["Time"];
 	    		$valor = $time[$i]["Valor"];
 	    		$colocacao = $time[$i]["Colocacao"];
 	    	?>
 	    	<td><?= $nome; ?></td>
			<td><?= $valor; ?></td>
			<td><?= $colocacao; ?></td>
			
 	    </tr>
 	    <?php } ?>
 	</table>

</section>
</body>
</html>