<?php
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	if ($name == '' || $email == '' || $subject == '' || $message == '') {
		echo 'Fill in all the fields';
		exit;
	}
	//otpravka
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
	if(mail("kapustyan-0@mail.ru", $subject, $message, $headers))
		echo '<span style="color:#00b300;text-align:center;">The message has been sent!</span>';
	else
		echo "The message has not been sent";
?>
