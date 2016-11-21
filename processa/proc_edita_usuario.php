
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = md5($_POST['senha']);
$tipousuario = $_POST['tipousuario'];

$comando_sql = "UPDATE cadusuario SET nome = '$nome',email = '$email', cpf = '$cpf',senha = '$senha', 
tipousuario = '$tipousuario', modificado = NOW()  WHERE id = '$id' ";

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
		 <a  class="form-signin" href="index.php?link=2"><input class="btn btn-lg btn-primary margin40" type = "button" value="Voltar" /></a>

    
