<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../imagens/favicon.ico">
    <title>Recuperação de Senha - Techelp</title>
 
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="../css/signin.css" rel="stylesheet">

    <script src="../js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
 <?php
	 		
		include "Upload.class.php";
		include_once("../conexao.php");
					
			if ((isset($_POST["submit"])) && (! empty($_FILES['foto']))){
				$upload = new Upload($_FILES['foto'], 1000, 800, "../fotos/");
					echo $upload->salvar();
					$descricao = $_POST['descricao'];
					$titulo = $_POST['titulo'];
					$foto = $upload->novo_nome;
					
			}

$comando_sql="INSERT INTO cadreclamacao

(descricao,titulo,foto,situacao,criado) VALUES
('$descricao','$titulo','$foto',1, NOW())";



?>

<br><br>

     
      <div class="page-header">
	  <h1 class="text-center">
	  <?php
	  $resultado = mysqli_query($conn, $comando_sql);

	if($resultado==1) {
	
	
	echo "Reclamação efetuada com sucesso!";
	
		//header("location:index.html");
	
	}
		else {
		
		echo"Erro ao inserir dados no DB";
		
		}
	  ?>
	  
	  </h1>
				               
			<a href="../index.php"><input class="btn btn-lg btn-primary  margin40" type = "submit" value="Voltar" /></a>
	
	  
        </div>
       
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

