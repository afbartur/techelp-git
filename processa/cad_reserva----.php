
<?php
$horarioinicio 	= 		$_POST['horarioinicio'];
$horariofim		=		$_POST['horariofim'];
$turno 			= 		$_POST['turno'];
$data 			= 		$_POST['data'];
$local 			=		$_POST['local'];
$curso 			= 		$_POST['curso'];
$equipamento 	= 		$_POST['equipamento'];
$usuario 		= 		$_POST['usuario'];
$situacao 		= 		$_POST['situacao'];
$sala 			= 		$_POST['sala'];


$comando_sql="INSERT INTO cadreserva
(horarioinicio,horariofim,turno,data,local,curso,equipamento,usuario,situacao,sala,criado) VALUES
('$horarioinicio','$horariofim','$turno','$data','$local','$curso','$equipamento','$usuario',1,'$sala',NOW())";

$comando_sql3="INSERT INTO relreserva
(horarioinicio,horariofim,turno,data,local,curso,equipamento,usuario,situacao,sala,criado) VALUES
('$horarioinicio','$horariofim','$turno','$data','$local','$curso','$equipamento','$usuario',1,'$sala',NOW())";


$comando_sql2 = "UPDATE cadequipamento SET situacao = '2' WHERE nome = '$equipamento' && situacao != '2' LIMIT 1 ";

?>

<br><br>

     
      <div class="page-header">
	  <h1 class="text-center">
	  <?php
	  $resultado = mysqli_query($conn, $comando_sql);

	if($resultado==1) {
	
	
	echo "Reserva efetuada com sucesso!";
	//header("location:index.html");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
	  
	  <h1 class="text-center">
	  <?php
	  $resultado2 = mysqli_query($conn, $comando_sql2);

	if($resultado2==1) {
	
	
	echo "";
	//header("location:index.html");
	
	}
		else {
		
		echo"Erro ao inserir dados no situação DB";
		
		}
	  ?>
	  
	  <?php
	  $resultado3 = mysqli_query($conn, $comando_sql3);

	if($resultado3==1) {
	
	
	echo "";
	//header("location:index.html");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB relatorio";
		
		}
	  ?>
	  </h1>
				               
			<a href="index.php?link=39"><input class="btn btn-lg btn-primary  margin40" type = "submit" value="Voltar" /></a>
	
	  
        </div>
       
   

