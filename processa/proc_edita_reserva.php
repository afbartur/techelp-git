
<?php
$id = $_POST['id'];
$usuario = $_POST['usuario'];
$horarioinicio = $_POST['horarioinicio'];
$horariofim = $_POST['horariofim'];
$turno = $_POST['turno'];
$local = $_POST['local'];
$data = $_POST['data'];
$sala = $_POST['sala'];
$curso = $_POST['curso'];



$comando_sql = "UPDATE cadreserva SET usuario = '$usuario',horarioinicio = '$horarioinicio', horariofim = '$horariofim',turno = '$turno', 
data = '$data',sala = '$sala',curso = '$curso', modificado = NOW()  WHERE id = '$id' ";

?>

<br><br>

	  <h1 class="text-center">
	  <?php
	  $resultado = mysql_query($comando_sql);

	if($resultado==1) {
	
	
	echo "Atualização efetuada com sucesso!";
	//header("location:index.html?link=2");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
		 <a  class="form-signin" href="index.php?link=38"><input class="btn btn-lg btn-primary butao2 margin40" type = "button" value="Voltar" /></a>

    
