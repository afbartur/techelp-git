
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tipousuario = $_POST['tipousuario'];
$curso = $_POST['curso'];
$modificadopor = $_POST['modificadopor'];

$comando_sql="INSERT INTO cadusuario
(nome,email,cpf,senha,tipousuario,curso, modificadopor, criado) VALUES
('$nome','$email','$cpf','$senha','$tipousuario','$curso', '$modificadopor',NOW())";



?>

<br><br>

     
      <div class="page-header">
	  <h1 class="text-center">
	  <?php
	  $resultado = mysqli_query($conn, $comando_sql);

	if($resultado==1) {
	
	
	echo "Cadastro efetuado com sucesso!";
	//header("location:index.html");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
				               
			<a href="index.php?link=2"><input class="btn btn-lg btn-primary  margin40" type = "submit" value="Voltar" /></a>
	
	  
        </div>
       


