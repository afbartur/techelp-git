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
$Mailer->Username = 'afbartur@yahoo.com.br';
$Mailer->Password = 'jesus100%';

//email remetnde
$Mailer->From = 'afbartur@yahoo.com.br';

// nome do remetente

$Mailer->FromName = 'Techelp';

//assunto da mensatem

$Mailer->Subject = 'Recuperar Senha';

//cormo da mensagem

$Mailer->Body = 'Conteudo da mensagem';

//conteudo da mensagem em texto

$Mailer->Username = 'atendimentotechelp@gmail.com';

//destinatário

$Mailer->AddAddress = 'afbartur@gmail.com';

if($Mailer->Send()){
	echo "E-Mail enviado com sucesso";
}else{
	echo "Erro no envio do Email: " .$Mailer-> ErrorInfo;
}


?>