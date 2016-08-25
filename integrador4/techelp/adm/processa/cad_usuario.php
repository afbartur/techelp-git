<?php
session_start();
include_once("../seguranca.php");
include("../conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inicio-Techelp">
    <meta name="author" content="Artur">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Inicio-Techelp</title>

    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../theme.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
</head>
  <body class="fundo">

<?php
	include_once("../menu_admin.php");
	
  ?>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tipousuario = $_POST['tipousuario'];


$comando_sql="INSERT INTO cadusuario
(nome,email,cpf,senha,tipousuario) VALUES
('$nome','$email','$cpf','$senha','$tipousuario')";



?>

<br><br>
<div class="container theme-showcase " role="main">
     
      <div class="page-header">
	  <h1 class="text-center">
	  <?php
	  $resultado = mysql_query($comando_sql);

	if($resultado==1) {
	
	
	echo "Cadastro efetuado com sucesso!";
	//header("location:index.html");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
				                <form class="form-signin" action="../index.php?link=3">
								  <input class="btn btn-lg btn-primary btn-block" type = "submit" value="Voltar" />
								</form>
								</p>
								
 
    
	  
	  
	  
	  
	  
        </div>
       
    </div> <!-- /container -->


    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
