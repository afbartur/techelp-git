<?php
session_start();
include_once("seguranca.php");
include_once("conexao.php");
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

    <title>Tec Help</title>

    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
</head>
  <body class="fundo">
  <?php
	include_once("menu_admin.php");
	
  ?>
 
    <div class="container theme-showcase " role="main">
	
	<div class="text-right">
	<?php
	
	$resultado = mysqli_query($conn, "SELECT * FROM cadreclamacao" );
	$linhas=mysqli_num_rows($resultado);
	
	?>
		
<a href="index.php?link=32" >	<button href="" class="btn btn-success" type="button">
  Reclamações <span class="badge"><?php echo $linhas; ?></span>
</button>
</a>
<?php
	
	$resultado = mysqli_query($conn, "SELECT * FROM cadreclamacao WHERE situacao = 1" );
	$linhas_nao_lidas =mysqli_num_rows($resultado);
	
	?>

<a href="index.php?link=32" ><button  class="btn btn-danger" type="button">
   Não Lidas <span class="badge"><?php echo $linhas_nao_lidas; ?></span>
</button>
</a>
	</div>
	
	<h4 class="text-left">
	
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
	</h4>
	
	<div class="page-header">
	
	
	
	
	
	
	
	<?php
	$link=$_GET["link"];
	$pag[1]="bevindo.php";
	$pag[2]="crud/listar_usuario.php";
	$pag[3]="crud/cadastrar_usuario.php";
	$pag[4]="crud/editar_usuario.php";
	$pag[5]="processa/proc_edita_usuario.php";
	$pag[6]="processa/cad_usuario.php";
	$pag[7]="crud/visualiza_usuario.php";
	$pag[8]="processa/proc_apagar_usuario.php";
	$pag[9]="processa/cad_equipamento.php";
	$pag[10]="crud/cadastrar_equipamento.php";
	$pag[11]="crud/visualiza_equipamento.php";
	$pag[12]="crud/listar_equipamento.php";
	$pag[13]="processa/proc_edita_equipamento.php";
	$pag[14]="crud/editar_equipamento.php";
	$pag[15]="processa/proc_apagar_equipamento.php";
	$pag[16]="crud/cadastrar_local.php";
	$pag[17]="processa/cad_local.php";
	$pag[18]="crud/listar_local.php";
	$pag[19]="crud/visualiza_local.php";
	$pag[20]="crud/editar_local.php";
	$pag[21]="processa/proc_edita_local.php";
	$pag[22]="processa/proc_apagar_local.php";
	$pag[23]="processa/cad_curso.php";
	$pag[24]="crud/listar_curso.php";
	$pag[25]="crud/cadastrar_curso.php";
	$pag[26]="crud/visualiza_curso.php";
	$pag[27]="crud/editar_curso.php";
	$pag[28]="processa/proc_edita_curso.php";
	$pag[29]="processa/proc_apagar_curso.php";
	$pag[30]="realizar_denuncia.php";
	$pag[31]="processa/cad_reclamacao.php";
	$pag[32]="crud/listar_reclamacao.php";
	$pag[33]="crud/visualiza_reclamacao.php";
	$pag[34]="crud/editar_reclamacao.php";
	$pag[35]="processa/proc_edita_reclamacao.php";
	$pag[36]="crud/listar_reserva.php";
	$pag[37]="processa/cad_reserva.php";
	$pag[38]="crud/listar_reserva.php";
	$pag[39]="crud/cadastrar_reserva.php";
	$pag[40]="processa/proc_apagar_reclamacao.php";
	$pag[41]="crud/editar_reserva.php";
	$pag[42]="processa/proc_edita_reserva.php";
	$pag[43]="processa/proc_apagar_reserva.php";
	
	if(!empty($link)){
		if(file_exists($pag[$link])){}
		include$pag[$link];
		
	}else{
		include "bemvindo.php";
	}
	
	?>
	
	</div>
</div>
<br> <br>	
<footer class="text-center fume">
<p>
TECHELP LTDA © 2016 - Todos os Direitos Reservados.
</p>
</footer>

    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
