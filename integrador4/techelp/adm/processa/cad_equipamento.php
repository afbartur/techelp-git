
<?php
$nome = $_POST['nome'];
$situacao = $_POST['situacao'];
$descricao = $_POST['descricao'];
$tombo = $_POST['tombo'];


$comando_sql="INSERT INTO cadequipamento
(nome,situacao,descricao,tombo,criado) VALUES
('$nome','$situacao','$descricao','$tombo',NOW())";



?>

<br><br>
<div class="container theme-showcase " role="main">
     
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
				               
			<a href="index.php?link=12"><input class="btn btn-lg btn-primary btn-block" type = "submit" value="Voltar" /></a>
	
	  
        </div>
       
    </div> <!-- /container -->

