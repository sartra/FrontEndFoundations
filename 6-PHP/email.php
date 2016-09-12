<?
	$emailTo = "strenshaw@gmail.com";
	$subject = "Emailing in PHP";
	$body = "rocking PHP!";
	$headers = "From: strenshaw@gmail.com"; 
	
	
	if (mail($emailTo, $subject, $body, $headers)){
		echo "email sent successfully!!! horrah!";
	} else {
		echo "email failed to send";
		}

?>

<form>


</form>