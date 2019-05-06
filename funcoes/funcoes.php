<?php

    function imprimir($print)
    {
        echo "<pre>";
        print_r($print);
        echo "</pre>";
    }

    function sendMessage($to, $body, $subject, $from = NULL){
		
		$config = newsqlAdm('pro_ajustes', '');
		
		$mail = new PHPMailer(true);
		
		if($from == NULL)
			$from = "julio@vk2.com.br";
		
		$mail->IsSMTP();
		
		try {
		  $mail->SMTPAuth   = true;
		  $mail->Host       = $config[0]->smtp;
		  $mail->Port       = $config[0]->porta;
		  $mail->Username   = $config[0]->mail_send;
		  $mail->Password   = $config[0]->senha;
		  $mail->AddAddress($to);
		  $mail->SetFrom($from);
		  $mail->Subject = $subject;
		  $mail->MsgHTML($body);
		  		
		  return $mail->Send();
		  
		} catch (phpmailerException $e) {
			echo $e;
			return false;
		}
	}