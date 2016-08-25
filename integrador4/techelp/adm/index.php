<?php
session_start();
include_once("seguranca.php");
include_once("conexao.php");
echo "Bem vindo Administrador: " .$_SESSION['UsuarioNome'];
?>
</br>
<a href="sair.php">Sair</a>


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

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
</head>
  <body class="fundo">
  <?php
	include_once("menu_admin.php");
	
  ?>
 
    <div class="container theme-showcase " role="main">
	<div class="page-header">
	<h3 class="text-right">
	 <script>// <![CDATA[
var mydate=new Date()
                        var year=mydate.getYear()
                        if (year < 1000)
                            year+=1900
                        var day=mydate.getDay()
                        var month=mydate.getMonth()
                        var daym=mydate.getDate()
                        if (daym<10)
                            daym="0"+daym
var dayarray=new Array("Domingo,","Segunda-feira,","Terça-feira,","Quarta-feira,","Quinta-feira,","Sexta-feira,","Sábado,")
var montharray=new  Array("Janeiro","Fevereiro","Março","Abril","Malho","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro")
document.write(" "+dayarray[day]+" "+daym+" de "+montharray[month]+" de "+year+"")
</script>
	</h3>
	
	<?php
	$link=$_GET["link"];
	
	$pag[1]="bevindo.php";
	$pag[2]="listar_usuario.php";
	$pag[3]="cadastrar_usuario.php";
		
	if(!empty($link)){
		if(file_exists($pag[$link])){}
		include$pag[$link];
		
	}else{
		include "bemvindo.php";
	}
	
	?>
	
	</div>
</div>
	
<footer class="rodape">
</footer>

    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
