
<?php
$id = $_GET['id'];


$comando_sql = "DELETE FROM cadreclamacao WHERE id=$id";

?>

<br><br>

     
      <div class="page-header">
	  <h1 class="text-center">
	  <?php
	  $resultado = mysqli_query($conn, $comando_sql);
	  $linhas = mysqli_affected_rows();

	if($resultado==1) {
	
	
	echo "Reclamação apagada com sucesso!";
	//header("location:index.html?link=2");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
		 <a  class="form-signin" href="index.php?link=32"><input class="btn btn-lg btn-primary margin40" type = "button" value="Voltar" /></a>
		
											
 
    
	  
	  
	  
	  
	  
        </div>
       

