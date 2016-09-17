
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];



$comando_sql = "UPDATE cadcurso SET nome = '$nome', 
modificado = NOW()  WHERE id = '$id' ";

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
		 <a  class="form-signin" href="index.php?link=24"><input class="btn btn-lg btn-primary butao2 margin40" type = "button" value="Voltar" /></a>
		
											
 
    
	  
	  
	  
	  
	  
     
       

