
<?php
$id = $_POST['id'];
$situacao = $_POST['situacao'];
$atendimento = $_POST['atendimento'];




$comando_sql = "UPDATE cadreclamacao SET situacao = '$situacao', atendimento = '$atendimento',
modificado = NOW()  WHERE id = '$id' ";

?>

<br><br>

     
     
	  <h1 class="text-center">
	  <?php
	  $resultado = mysqli_query($conn, $comando_sql);

	if($resultado==1) {
	
	
	echo "Atualização efetuada com sucesso!";
	//header("location:index.html?link=2");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
		 <a  class="form-signin" href="index.php?link=32"><input class="btn btn-lg btn-primary margin40" type = "button" value="Voltar" /></a>
		
											
 
    
	  
	  
	  
	  
	  
     
       

