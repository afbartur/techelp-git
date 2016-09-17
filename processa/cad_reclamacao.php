
<?php
$descricao = $_POST['descricao'];
$situacao = $_POST['situacao'];
$imagem = $_POST['imagem'];





$comando_sql="INSERT INTO cadreclamacao
(descricao,situacao,imagem,criado) VALUES
('$descricao','$situacao','$imagem',NOW())";



?>

<br><br>

     
      <div class="page-header">
	  <h1 class="text-center">
	  <?php
	  $resultado = mysql_query($comando_sql);

	if($resultado==1) {
	
	
	echo "Reclamação efetuada com sucesso!";
	//header("location:index.html");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
				               
			<a href="index.php?link=24"><input class="btn btn-lg btn-primary butao2 margin40" type = "submit" value="Voltar" /></a>
	
	  
        </div>
       
   

