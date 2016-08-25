<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$Mailer = new PHPMailer();
	
	//Define que será usado SMTP
	$Mailer->IsSMTP();
	
	//Enviar e-mail em HTML
	$Mailer->isHTML(true);
	
	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';
	
	//Configurações
	$Mailer->SMTPAuth = true;
	$Mailer->SMTPSecure = 'ssl';
	
	//nome do servidor
	$Mailer->Host = 'smtp.mail.yahoo.com';
	//Porta de saida de e-mail 
	$Mailer->Port = 465;
	
	//Dados do e-mail de saida - autenticação
	$Mailer->Username = 'afbartur@yahoo.com.br';
	$Mailer->Password = 'jesus100%';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = 'afbartur@yahoo.com.br';
	
	//Nome do Remetente
	$Mailer->FromName = 'Techelp';
	
	//Assunto da mensagem
	$Mailer->Subject = 'Titulo - Recuperar Senha';
	
	//Corpo da Mensagem
	$Mailer->Body = 'Conteudo do E-mail';
	
	//Corpo da mensagem em texto
	$Mailer->AltBody = 'conteudo do E-mail em texto';
	
	//Destinatario 
	$destino = 'afbartur@hotmail.com';
	$nomeDestino = 'afbartur@hotmail.com';
	$Mailer->AddAddress($destino,$nomeDestino);;
	
	if($Mailer->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
	
?>



