<?php
ob_start();
if(($_SESSION['UsuarioId'] == "") || ($_SESSION['UsuarioNome'] == "") || ($_SESSION['UsuarioEmail'] == "") 
|| ($_SESSION['UsuarioCpf'] == "") ||($_SESSION['UsuarioSenha'] == "") || ($_SESSION['UsuarioTipousuario'] == "") ){
	
	//Mensagem erro
	$_SESSION['loginErro'] = "Área restrita, somonte usuários cadastrados são permitidos.";
	
	// Manda para a tela de Login
	
	header ("Location: login.php");
}

?>