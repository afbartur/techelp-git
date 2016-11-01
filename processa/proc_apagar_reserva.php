
<?php
$id = $_GET['id'];
$equipamento = $_GET['equipamento'];

$comando_sql = "DELETE FROM cadreserva WHERE id=$id";

$comando_sql2 = "UPDATE cadequipamento SET situacao = '1' WHERE nome = '$equipamento' && situacao != '1' LIMIT 1";


?>

<br><br>

     
      <div class="page-header">
	  <h1 class="text-center">
	  <?php
	  $resultado = mysqli_query($conn, $comando_sql);
	  $linhas = mysqli_affected_rows();

	if($resultado==1) {
	
	echo "Reserva cancelada com sucesso!";
	//header("location:index.html?link=2");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	
	  
	  
	  
	  <?php
	  $resultado2 = mysqli_query($conn, $comando_sql2);
	  $linhas2 = mysqli_affected_rows();

	if($resultado2==1) {
	
	echo "O Equipamento está Livre Novamente!";
	//header("location:index.html?link=2");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
	  
		 <a  class="form-signin" href="index.php?link=38"><input class="btn btn-lg btn-primary  margin40" type = "button" value="Voltar" /></a>
		
	  
        </div>
       
  