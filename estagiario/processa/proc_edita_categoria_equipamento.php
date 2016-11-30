
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$modificadopor = $_POST['modificadopor'];


$comando_sql = "UPDATE cadcategoriaequipamento SET nome = '$nome', modificadopor = '$modificadopor',
modificado = NOW()  WHERE id = '$id' ";

?>

<br><br>

     
     
	  <h1 class="text-center">
	  <?php
	  $resultado = mysqli_query($conn, $comando_sql);

	if($resultado==1) {
	
	
	echo "Atualização efetuada com sucesso!";
	//header("location:index.html?link=2");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  </h1>
		 <a  class="form-signin" href="index.php?link=49"><input class="btn btn-lg btn-primary  margin40" type = "button" value="Voltar" /></a>
