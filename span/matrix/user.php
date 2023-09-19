<?php
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];

    $to='thizasishuba@gmail.com';
    $headers="From: ".$email;
    $subject='Message'."\n"."Name: ".$name."\n";
    
    $message="Name: ".$name."\n"."message: ".$msg."\n";
    


   if(mail($to, $subject, $message, $headers)){
      echo "<p style='background-image: linear-gradient(yellow, green, green); color: white; padding-top: 100px; z-index: 1024;'>Sent Successfully! Thank you for your message, we will get back to you as soon as possible/a></p>";
      }
   else{
      echo "Something went wrong!";
   }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A blog post written by Themba Sishuba about how to go about learning how to code">
  <meta name="keywords" content="blog, coder, Johannesburg">
	<title>Leave a message | Johannesburg</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include('head.php') ?>

		<div class="container">
			
			<div id="contact-form">
				<form action="user.php" method="POST">
					<h2>Leave a message</h2><br>

					<label>Name</label><br><br>
					<input type="text" name="name" required placeholder="Enter name"><br><br>

					<label>Email</label><br><br>
					<input type="email" name="email" required placeholder="Enter email"><br><br>


					<label>Message</label><br><br>
					<textarea id="txtmsg" type="text" name="msg" placeholder="type message..."></textarea><br><br>

					<button type="submit" name="submit" data-submit="...Sending">Submit</button><br><br>
				</form>
			</div>

		</div>
	</div>

	<?php include('bottom.php') ?>

<script src="js/player.js"></script>
</body>
</html>