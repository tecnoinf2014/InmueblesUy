<?php

Yii::import("application.extensions.phpmailer.JPhpMailer");

class EmailSender{
	
	public function enviar(array $from, array $to, $subjet, $message)
	{
		$mail = new JPhpMailer();
		$mail->CharSet = "UTF-8";
		$mail->IsSMTP();
		$mail->SMTPDebug  = 0;
		$mail->SMTPSecure = "ssl";
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;  ; //puerto smtp de gmail
		$mail->SetFrom( Yii::app()->params['adminEmail'], Yii::app()->name );
		$mail->Username   = Yii::app()->params['adminEmail']; // SMTP account username
		$mail->Password   = Constantes::getPasswordAdminEmail();
		$mail->SMTPAuth   = true;
		$mail->Subject = $subjet;
		$mail->MsgHTML($message);
		$mail->AddAddress($to[0], $to[1]);
		$mail->Send();
		
		if(!$mail->Send()) {
			echo "Error al enviar el E-mail: " . $mail->ErrorInfo; // di da error
		}
		else{
			echo "Email enviado Correctamente"; // di da error
		}
	}
}