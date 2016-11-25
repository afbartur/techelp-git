
<?php
$nome = $_POST['nome'];
$nomeprofessor = $_POST['nomeprofessor'];
$equipamento = $_POST['equipamento'];
$situacao = $_POST['situacao'];
$dataentrega = $_POST['dataentrega'];
$dataprevista = $_POST['dataprevista'];
$datarecebido = $_POST['datarecebido'];
$local= $_POST['local'];
$sala = $_POST['sala'];
$curso = $_POST['curso'];
$horario1 = $_POST['horario1'];
$horario2 = $_POST['horario2'];
$horario3 = $_POST['horario3'];
$turno = $_POST['turno'];


$comando_sql="INSERT INTO cadendregas
(nome,nomeprofessor,equipamento,situacao,dataentrega,dataprevista,datarecebido,local,sala,curso,horario1,horario2,horario3,turno,criado) VALUES
('$nome','$nomeprofessor','$equipamento','$situacao','$dataentrega','$dataprevista','$datarecebido','$local','$sala','$curso','$horario1','$horario2','$horario3','$turno',NOW())";

$comando_sql2 = "UPDATE cadequipamento SET situacao = '3' WHERE nome = '$equipamento' && situacao = '2' LIMIT 1 ";

?>

<br><br>

     
      <div class="page-header">
	  <h1 class="text-center">
	  <?php
	  $resultado = mysqli_query($conn, $comando_sql);

	if($resultado==1) {
	
	
	echo "Empréstimo efetuado com sucesso!";
	//header("location:index.html");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  
	  <?php
	  $resultado2 = mysqli_query($conn, $comando_sql2);

	if($resultado2==1) {
	
	
	echo "";
	//header("location:index.html");
	
	}
		else {
		
		echo"Erro ao inserir dados no situação  DB";
		
		}
	  ?>
	  
	  
	  
	  </h1>
				               
			<a href="index.php?link=56"><input class="btn btn-lg btn-primary margin40" type = "submit" value="Voltar" /></a>
	
	  
        </div>
       


