<?php
	//Incluir a conexão com banco de dados
	include_once('conexao.php');
	
	//Recuperar o valor da palavra
	$cursos = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$cursos = "SELECT * FROM cadequipamento WHERE nome LIKE '%$cursos%'";
	$resultado_cursos = mysqli_query($conn, $cursos);
	
	if(mysqli_num_rows($resultado_cursos) <= 0){
		echo "Nenhum curso encontrado...";
	}else{
		while($linhas = mysqli_fetch_assoc($resultado_cursos)){
			echo "<tr>";
		echo"<td>".$linhas['id'] ."</td>";
		echo"<td>".$linhas['nome'] ."</td>";
		if ($linhas['situacao'] == 1){
			$sit = "Livre";
		};
		if ($linhas['situacao'] == 2){
			$sit = "Reservado";
		};
		echo"<td>".$sit ."</td>";
		echo"<td>".$linhas['descricao'] ."</td>";
		echo"<td>".$linhas['tombo'] ."</td>";
		echo "</tr>";
		}
	}
?>