
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tipousuario = $_POST['tipousuario'];
$criado = $_POST['criado'];

$comando_sql="INSERT INTO cadusuario
(nome,email,cpf,senha,tipousuario, criado) VALUES
('$nome','$email','$cpf','$senha','$tipousuario',NOW())";



?>

<br><br>

     
      <div class="page-header">
	  <h1 class="text-center">
	  <?php
	  $resultado = mysql_query($comando_sql);

	if($resultado==1) {
	
	
	echo "Cadastro efetuado com sucesso!";
	//header("location:index.html");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
				               
			<a href="index.php?link=2"><input class="btn btn-lg btn-primary butao2 margin40" type = "submit" value="Voltar" /></a>
	
	  
        </div>
       


