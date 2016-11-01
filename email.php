<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/favicon.ico">
    <title>Recuperação de Senha -Techelp</title>
 
 
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container ">

      <form class="form-signin fume">
	  <div class="form-signin2">
	 	  
	  </div>
        <h2 class="form-signin-heading text-center">Recuperação de Senha</h2>
        
        <div class="input-group">
		<span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
		
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-Mail" required autofocus>
		</div>
		<br>
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
		<a class="btn btn-lg btn-block"href="login.php">Voltar</a>
      </form>

    </div> <!-- /container -->


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
