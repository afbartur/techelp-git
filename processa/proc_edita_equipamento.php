
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$situacao = $_POST['situacao'];
$descricao = $_POST['descricao'];
$tombo = $_POST['tombo'];

$comando_sql = "UPDATE cadequipamento SET nome = '$nome',situacao = '$situacao', descricao = '$descricao',tombo = '$tombo', 
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
		 <a  class="form-signin" href="index.php?link=12"><input class="btn btn-lg btn-primary butao2 margin40" type = "button" value="Voltar" /></a>
