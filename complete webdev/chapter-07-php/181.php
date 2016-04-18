<!DOCTYPE html>
<html>
<head>
	<title>My First Webpage</title>
</head>
<body>

	<div>
		
		<?php 

			$emailTo = "test@test@gmail.com";
			$subject = "I hope this works!";
			$body = "I think you're great";
			$headers = "From: tris.test@gmail.com";

			echo mail($emailTo, $subject, $body, $headers);
			
		?>

	</div>

</body>
</html>