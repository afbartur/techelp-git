<?php
require("conexao.php");


session_start();
$email = $_POST["email"];

$sql = ("SELECT * FROM cadusuario WHERE email = '$email'") or die(mysql_error());

$result = mysqli_query($conn, $sql);
$dados = mysqli_fetch_array($result);
$nome = $dados['nome'];
$senha = $dados['senha'];
$assunto = "Recupera��o de Senha - Tec Help";

if(mysqli_num_rows ($result) > 0)
  {
	  $msg_email = " <font face='Comic Sans MS' size='2'>
		Ol� <b>$nome</b>, <br><br>
		Foi solicitado uma recupera��o de senha de seu perfil do Sistema Tec Help, 
		segue abaixo os dados de acesso: <br><br>
		<b>Senha:  </b>$senha<br><br><br>
		Se n�o foi voc� quem a solicitou o pedido recupera��o de senha, ignore esta mensagem.
		Fique tranquilo pois sua senha s� pode ser enviada para e-mail cadastrado em seu perfil.<br><br>
		<b>Atenciosamente, Equipe Tec Help.</b>";
		
//$emailsender = "adriano@renewalpt.com.br";
$emailsender = "afbartur@gmail.com";
$emaildestinatario = $email;

$quebra_linha = "\n";

$headers = "MIME-Version: 1.1" .$quebra_linha;
$headers .= "Content-type: text/html; charset=us-ascii" .$quebra_linha;
$headers .= "From: " . $emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
$headers .= "Reply-To: " . $emailsender . $quebra_linha;

mail($emaildestinatario, $assunto, $msg_email, $headers, "-r". $emailsender);


echo '<script type="text/javascript">
	alert("Os dados de acesso foram enviados ao seu E-mail!");
	window.location="../login.php";	
	</script>';

}
   else 
  { 
	echo '<script type="text/javascript">
	alert("Dados inv�lidos!");
	window.location="email.php";	
	</script>';
  }



?>