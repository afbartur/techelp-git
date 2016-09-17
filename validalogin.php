<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>
	<body>
<?php
session_start();
$emailt= $_POST['email'];
$senhat = $_POST['senha'];

include_once("conexao.php");

$result = mysql_query("SELECT * FROM cadusuario WHERE email ='$emailt' AND senha='$senhat' LIMIT 1 ");
$resultado= mysql_fetch_assoc($result);
//  echo "Usiário: " . $resultado['nome'];
if(empty($resultado)){
	//Mensagem erro
	$_SESSION['loginErro'] = "Usuário ou senha inválido";
	
	//redirecione para
	
	header ("Location: login.php");
	
}else{
	// define os valores atribuidos ao usuário
	$_SESSION['UsuarioNome']		= $resultado['nome'];
	$_SESSION['UsuarioId']			= $resultado['id'];
	$_SESSION['UsuarioEmail']		= $resultado['email'];
	$_SESSION['UsuarioCpf']			= $resultado['cpf'];
	$_SESSION['UsuarioSenha']		= $resultado['senha'];
	$_SESSION['UsuarioTipousuario']	= $resultado['tipousuario'];
	
	if($_SESSION['UsuarioTipousuario'] == 1){
		
		header("Location: index.php");
		
	}else if($_SESSION['UsuarioTipousuario'] == 2){
		
		header ("Location: professor.php");
		
	}else{
		
		header ("Location: usuario.php");
		
	}
	
}

?>
</body>
</html>
