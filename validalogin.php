﻿<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = $senha;
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM cadusuario WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['UsuarioNome']		= $resultado['nome'];
			$_SESSION['UsuarioId']			= $resultado['id'];
			$_SESSION['UsuarioEmail']		= $resultado['email'];
			$_SESSION['UsuarioCpf']			= $resultado['cpf'];
			$_SESSION['UsuarioSenha']		= $resultado['senha'];
			$_SESSION['UsuarioTipousuario']	= $resultado['tipousuario'];
			if($_SESSION['UsuarioTipousuario'] == "1"){
				header("Location: index.php");
			}elseif($_SESSION['UsuarioTipousuario'] == "2"){
				header("Location: professor\index.php");
			}elseif($_SESSION['UsuarioTipousuario'] == "3"){
				header("Location: funcionario\index.php");
			}else{
				header("Location: estagiario\index.php");
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: login.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: login.php");
	}
?>



<?php
/*
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
*/
?>

