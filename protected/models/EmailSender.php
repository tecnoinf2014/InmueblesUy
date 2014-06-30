<?php

Yii::import("application.extensions.phpmailer.JPhpMailer");

class EmailSender{
	
	public function enviar(array $from, array $to, $subjet, $message)
	{
		$mail = new JPhpMailer();
		$mail->CharSet = "UTF-8";
		$mail->IsSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465; //puerto smtp de gmail
		$mail->SetFrom("juanma.miraballes@gmail.com");
		$mail->Subject = $subjet;
		$mail->MsgHTML($message);
		$mail->AddAddress($to[0], $to[1]);
		$mail->Send();
		
		if(!$mail->Send()) {
			echo "Error al enviar el E-mail: " . $mail->ErrorInfo; // di da error
		}
	}
}