<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Techelp">
    <meta name="author" content="Techelp">
    <link rel="icon" href="imagens/favicon.ico">
    <title>Login-Techelp</title>
	
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
 
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body class="fadeIn" >
  <?php
  unset(
  $_SESSION['UsuarioNome'],		
  $_SESSION['UsuarioId'],			
  $_SESSION['UsuarioEmail'],		
  $_SESSION['UsuarioCpf'],			
  $_SESSION['UsuarioSenha'],		
  $_SESSION['UsuarioTipousuario']	
  );
?>
    <div class="container">

      <form class="form-signin fume " method="POST" action="validalogin.php">
	  <div class="form-signin2">
	 
	  <label  >
	  </div>
        <h2 class="form-signin-heading text-center">Login</h2>
		<h3 class="form-signin-heading text-center">
		<?php
		if (isset($_SESSION['loginErro'])){
			echo $_SESSION['loginErro'];
			unset($_SESSION['loginErro']);
			
		}
		?>

		</h3>
		
        <label for="inputEmail" class="sr-only">E-mail</label>
		<div class="input-group">
		<span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
		
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-Mail" required autofocus>
		</div>
		</br>
		
        <label for="inputPassword" class="sr-only">Senha</label>
		<div class="input-group">
		<span class="input-group-addon" id="basic-addon1"> .<i class="fa fa-lock" aria-hidden="true"></i> </span>
		
		
        <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
		
		</div>
		<br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
		<br>
		<a href="realizar_reclamacao.php"><button class="btn btn-lg btn-primary btn-block" type="button">Realizar Reclamação</button></a>
		<a  class="btn btn-lg btn-block" href="email.php">Esqueceu sua senha?</a>
      </form>
	 
	  </label>

    </div> <!-- /container -->


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
