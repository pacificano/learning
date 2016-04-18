<?php  

	if ($_POST["submit"]) {

		$result = '<div class="alert alert-success">Form submitted</div>';

		if (!$_POST['name']) {

			$error = 'Please enter your name<br />';

		}

		if (!$_POST['email']) {

			$error .= 'Please enter your email address<br />';
			// $error .= is the same as $error = $error +
			
		}

		if (!$_POST['comment']) {

			$error .= 'Please enter your comment<br />';
			// $error .= is the same as $error = $error +
			
		}

		if ($_POST['email'] !="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
		   // if email is filled in BUT doesn't equal a valid email address

		    $error .= 'Please enter a valid email address';
		
		}

		if ($error) {

			$result = '<div class="alert alert-danger"><strong>There were error[s] in your form:<br />'.$error.'</strong></div>';
		
		} else {

			if (mail("test@test.com", "Comment from website!", "Name: ".$_POST['name']."

Email: ".$_POST['email']."

Comment: ".$_POST['comment'])) {

					$result = '<div class="alert alert-success"><strong>Thank you!</strong><br />I\'ll be in touch.</div>';
			
				} else {

					$result = '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
				
				}

		}

	}
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

		.mailForm {

			border: 1px solid grey;
			border-radius: 10px;
			margin-top: 20px;

		}

		textarea {

			height: 120px;

		}

		form {

			padding-bottom: 20px;

		}

    </style>

  </head>
  <body>

  	<div class="container">
  		
  		<div class="row">
  			
  			<div class="col-md-6 col-md-offset-3 mailForm">
			
				<h1>My email form</h1>

				<?php 

					echo $result;

				?>

				<p class="lead">Please get in touch - I'll get back to you as soon as possible.</p>

				<form method="post">
					
					<div class="form-group">
						
						<label form="name">Your name</label>
						<input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>">

					</div>

					<div class="form-group">
						
						<label form="email">Your email</label>
						<input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>">

					</div>

					<div class="form-group">
						
						<label form="comment">Your comment</label>
						<textarea name="comment" class="form-control"><?php echo $_POST['comment']; ?></textarea>

					</div>

					<input name="submit" type="submit" class="btn btn-success btn-lg" value="Submit">

				</form>

			</div>

  		</div>

  	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>