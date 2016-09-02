
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tipousuario = $_POST['tipousuario'];

$comando_sql = "UPDATE cadusuario SET nome = '$nome',email = '$email', cpf = '$cpf',senha = '$senha', 
tipousuario = '$tipousuario', modificado = NOW()  WHERE id = '$id' ";

?>

<br><br>
<div class="container theme-showcase " role="main">
     
      <div class="page-header">
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
		 <a  class="form-signin" href="index.php?link=2"><input class="btn btn-lg btn-primary btn-block" type = "button" value="Voltar" /></a>
		
											
 
    
	  
	  
	  
	  
	  
        </div>
       
    </div> <!-- /container -->
