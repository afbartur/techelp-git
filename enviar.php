<?php
require 'PHPMailer/PHPMailerAutoload.php';
$Mailer =new PHPMailer();
//DEFINE QUE SERA USADO SMTP
$Mailer->IsSMTP();

//ENVIAR EMAIL EM HTML

$Mailer->isHTML(true);

//ACEITA CARACTERES ESPECIAIS

$Mailer->Charset = 'UTF-8';
//CONFIGURAÇÕES

$Mailer->SMTPAuth = true;
$Mailer->SMTPSource = 'ssl';

//nome do servidor
$Mailer->Host = 'smtp.mail.yahoo.com';
$Mailer->Port = 465;

//dados do email de saida
$Mailer->Username = 'seuemail';
$Mailer->Password = 'suasenha';

//email remetnde
$Mailer->From = '@yahoo.com.br';

// nome do remetente

$Mailer->FromName = 'seusite';

//assunto da mensatem

$Mailer->Subject = 'Recuperar Senha';

//cormo da mensagem

$Mailer->Body = 'Conteudo da mensagem';

//conteudo da mensagem em texto

$Mailer->Username = '@gmail.com';

//destinatário

$Mailer->AddAddress = '@gmail.com';

if($Mailer->Send()){
	echo "E-Mail enviado com sucesso";
}else{
	echo "Erro no envio do Email: " .$Mailer-> ErrorInfo;
}


?>