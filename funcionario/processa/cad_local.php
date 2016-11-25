
<?php
$nome = $_POST['nome'];
$sala = $_POST['sala'];



$comando_sql="INSERT INTO cadlocal
(nome,sala,criado) VALUES
('$nome','$sala',NOW())";



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
				               
			<a href="index.php?link=18"><input class="btn btn-lg btn-primary  margin40" type = "submit" value="Voltar" /></a>
	
	  
        </div>
       


