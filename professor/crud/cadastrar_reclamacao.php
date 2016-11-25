<?php
include_once("seguranca.php");
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
    <title>Recuperação de Senha - Techelp</title>
 
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container ">

      <form class="form-signin fume text-center" method='post' action="../processa/cad_reclamacao.php" enctype='multipart/form-data' >
	  <div class="form-signin2">
	 	  
	  </div>
        <h2 class="form-signin-heading text-center">Realizar Reclamação</h2>
        <label  class="sr-only">Titulo:</label>
        
		<input type="text" name="titulo" class="form-control" placeholder="Titulo" required autofocus></input><br>
		<label  class="sr-only">Descrição:</label>
        <textarea type="text" name="descricao" class="form-control" placeholder="Descrição" required ></textarea><br>
       
		<input type="file" name='foto' id="file" class="inputfile " />
		<label for="file" class="btn btn-lg btn-primary btn-block">Enviar Foto</label>
		
		
		<input class="btn btn-lg btn-primary btn-block" type='submit' name='submit' Value="Enviar"></input>
		
		<a class="btn btn-lg btn-block"href="login.php">Voltar</a>
		<?php
	 
		 		
		include "Upload.class.php";
					
			if ((isset($_POST["submit"])) && (! empty($_FILES['foto']))){
				$upload = new Upload($_FILES['foto'], 1000, 800, "fotos/");
					echo $upload->salvar();
			}
		
	 
	 ?>
      </form>
	 
	 
		
		

	
    </div> <!-- /container -->


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
