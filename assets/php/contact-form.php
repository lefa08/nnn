<?php

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$date = trim($_POST['date']);
	$company_name = trim($_POST['company_name']);
	$address = trim($_POST['address']);
	$qty = trim($_POST['qty']);
	$color = trim($_POST['color']);
	$subject = trim($_POST['subject']);
	$message = trim($_POST['message']);
	
	$emailTo = 'info@thegoldenshefoundation.com';
	if (empty($subject)) {
	    $subject = 'Message from your Website.';
	}
	$body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nMessage:\n$message \n\nDate: $date \n\nCampany_name: $campany_name \n\nAddress:\n$address \n\nQty: $qty \n\nColor: $color";
	$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('Thank you for your Message. We will get back to you ASP!');
	
?>
