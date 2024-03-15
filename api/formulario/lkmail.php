<link href="estilo_formularios.css" rel="stylesheet" type="text/css">
<?php

$nome     = strip_tags(trim($_POST['nome'])); 
$cidade    = strip_tags(trim($_POST['cidade'])); 
$email    = strip_tags(trim($_POST['email'])); 
$fone     = strip_tags(trim($_POST['fone'])); 
$assunto   = strip_tags(trim($_POST['assunto'])); 
$mensagem  = strip_tags(trim($_POST['mensagem'])); 
 
include("phpmailer/phpmailer/class.phpmailer.php");

$mail = new PHPMailer();

$mail->SetLanguage("br", "phpmailer/phpmailer/language/");
$mail->IsSMTP(); // mandar via SMTP
$mail->Host = "mail.kakarekos.com.br"; // Seu servidor smtp
$mail->SMTPAuth = true; // smtp autenticado
$mail->Username = "site@kakarekos.com.br"; // usuário deste servidor smtp
$mail->Password = "Acesso667"; // senha

$mail->From = "site@kakarekos.com.br";// usuário deste servidor smtp
$mail->FromName = "$nome";


$mail->AddAddress("kakarekos@kakarekos.com.br","Kakarekos"); //Endereço que deve ser enviada a mensagen



//Endereco de resposta
$mail->AddReplyTo("$email","$nome");

$mail->WordWrap = 50; 
$mail->IsHTML(true); 

$mail->Subject = "$assunto";
$mail->Body = "
CONTATO - ATRAVÉS DO SITE:<br>
<br><b>Nome:</b> $nome 
<br><b>Cidade/UF:</b> $cidade 
<br><b>E-mail:</b> $email 
<br><b>Fone:</b> $fone 
<br><b>Assunto:</b> $assunto
<br><b>Mensagem:</b> $mensagem
  ";
$mail->AltBody = "Kakarekos";

if(!$mail->Send())
{
echo "A mensagem não pode ser enviada

";
echo "Erro: " . $mail->ErrorInfo;
exit;
}

echo "
<body  bgcolor=transparent ALLOWTRANSPARENCY=true>

	<div align=left>
	<font color=#00B22D><b>&nbsp;&nbsp;&nbsp;&nbsp;<img src=imagens/correto.png width=35 height=35 align=absmiddle border=0>&nbsp;&nbsp;ENVIADO COM SUCESSO!</b><br></font>
	</div>
	
</body>";
?> 