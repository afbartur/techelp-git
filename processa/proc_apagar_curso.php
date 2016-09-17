
<?php
$id = $_GET['id'];


$comando_sql = "DELETE FROM cadcurso WHERE id=$id";

?>

<br><br>

     
      <div class="page-header">
	  <h1 class="text-center">
	  <?php
	  $resultado = mysql_query($comando_sql);
	  $linhas = mysql_affected_rows();

	if($resultado==1) {
	
	
	echo "Curso apagado com sucesso!";
	//header("location:index.html?link=2");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
		 <a  class="form-signin" href="index.php?link=24"><input class="btn btn-lg btn-primary butao2 margin40" type = "button" value="Voltar" /></a>
		
											
 
    
	  
	  
	  
	  
	  
        </div>
       

