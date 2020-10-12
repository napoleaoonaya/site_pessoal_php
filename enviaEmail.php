<?php
    // Inclui o arquivo class.phpmailer.php localizado na pasta class
	require ("PHPMailer/PHPMailerAutoload.php");
	include ("config/config.php");

	$nomeusuario = $_POST["nome"];
	$telefoneusuario = $_POST["telefone"];
	$celularusuario = $_POST["celular"];
	$enderecousuario = $_POST["endereco"];
	$emailusuario = $_POST["email"];
	$motivousuario = $_POST["motivo"];
	$mensagemusuario = $_POST["mensagem"];

    // Inicia a classe PHPMailer
	$mail = new PHPMailer;

	$mail->Username=USERNAME; // Usuário do servidor SMTP (endereço de email)
	$mail->Password=PASSWORD; // Senha do servidor SMTP (senha do email usado)
	
	$mail->isSMTP();

	//$mail->SMTPDebug=2;

	//$mail->Debugoutput="html";

	$mail->Host="smtp.gmail.com"; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
	$mail->Port=587; //  Usar 587 porta SMTP
	$mail->SMTPSecure = "tls"; //Protocolo de segurança
	$mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
	
	//Define o remetente
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
	$mail->SetFrom('suporteonaya@gmail.com', 'remetente'); //Seu e-mail

	//Define os destinatário(s)
	//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->AddAddress($emailusuario,'destinatario');
	$mail->Subject = 'Suporte';//Assunto do e-mail

	//Define o email de resposta
	$mail->AddReplyTo('suporteonaya@gmail.com', 'remetente');

	// Define o email de copia oculta
	//$mail->AddCC($emailusuario,'destinatario'); 
	
	//Define o corpo do email
	$msg = "Suporte técnico Onaya"."\n\n"
	."Motivo: ".$motivousuario."\n\n"
	."Dados do cliente"."\n"
	."Contato: ".$nomeusuario."\n"
	."Telefone: ".$telefoneusuario."\n"
	."Celular: ".$celularusuario."\n"
	."Endereço: ".$enderecousuario."\n\n"
	."Email: ".$emailusuario."\n\n"
	."Mensagem: ".$mensagemusuario;

	$mail->Body = $msg;

	$mail->Send();
	
	header("Location: contato.php#contact")


?>