
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$nomeprofessor = $_POST['nomeprofessor'];
$equipamento = $_POST['equipamento'];
$situacao = $_POST['situacao'];
$dataentrega = $_POST['dataentrega'];
$dataprevista = $_POST['dataprevista'];
$datarecebido = $_POST['datarecebido'];
$local = $_POST['local'];
$sala = $_POST['sala'];
$curso = $_POST['curso'];
$horario1 = $_POST['horario1'];
$horario2 = $_POST['horario2'];
$horario3= $_POST['horario3'];
$turno = $_POST['turno'];

$comando_sql = "UPDATE cadendregas SET nome = '$nome',nomeprofessor = '$nomeprofessor', equipamento = '$equipamento',situacao = '$situacao',dataentrega = '$dataentrega',dataprevista = '$dataprevista',datarecebido = '$datarecebido', local = '$local',sala = '$sala',curso = '$curso', horario1 = '$horario1',horario2 = '$horario2',horario3 = '$horario3',turno = '$turno',
modificado = NOW()  WHERE id = '$id' ";


//$comando_sql2 = "UPDATE cadequipamento SET situacao = '1' WHERE nome = '$equipamento' && situacao = '3' LIMIT 1 ";

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
	  <?php
	 // $resultado2 = mysqli_query($conn, $comando_sql2);

	//if($resultado2==1) {
	
	
	//echo "";
	//header("location:index.html");
	
	//}
		//else {
		
		//echo"Erro ao inserir dados no situação  DB";
		
		//}
	  ?>
	  
	  
	  </h1>
		 <a  class="form-signin" href="index.php?link=56"><input class="btn btn-lg btn-primary  margin40" type = "button" value="Voltar" /></a>
