<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="lol.css">
</head>
<body>
    <?php include 'asset/Menu.php'; 
     ?>
    <center><div id="form">
            <h3>Sua Conta</h3>
    <div class="col-md-12">        
        <form action="Contas.php" method="POST" id="e">
            Nick :
            <input type="text" name="nick" id="nome" placeholder="Nome do Usuario" >
            <br>
            Senha :
            <input type="password" name="senha" placeholder="Digite a sua Senha">
            </div>
            <br>
            Servidores
            <select name="servidor" id="select">
                <option value="Brasil">Brasil</option>
                <option value="EUA">EUA</option>
                <option value="ALE">ALE</option>
            </select>
            <br>
                <a href="criarconta.php"><button type="button" class="btn btn-info">Criar Conta</button></a>
                <a href="#">Esqueci a Senha</a>
                <input type="submit" name="Enviar">
        </form>


    </div></center>
    
</body>
</html>