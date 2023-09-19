<?php
	session_start();
	require_once "config.php";

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $whatsapp=$_POST['whatsapp'];
    $msg=$_POST['msg'];
    
    $query = mysqli_query($con, "INSERT INTO bc_clients (name, whatsapp, email, msg) VALUES ('$name', $whatsapp, '$email', '$msg')");

    $to='sishubats@gmail.com';
    $headers="info@bigcanvas.co.za";
    $subject='Big Canvas client: '.$name."\n";
    
    $message="Name: ".$name."\n"."Email: ".$email."\n"."Whatsapp number: ".$whatsapp."\n"."message: ".$msg."\n";
    


   if(mail($to, $subject, $message, $headers) && $query){
      echo "<p id='phpmsg'>Sent Successfully! Thank you for your message, we will get back to you as soon as possible</p>";
      }
   else{
      echo "Something went wrong!";
   }
}

?>

<!DOCTYPE html>
<html>
<head>
          <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108740911-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108740911-1');
</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Get a logo and professional email for only R550 at Big Canvas">
  <meta name="keywords" content="logo, email Johannesburg">
  <meta property="og:title" content="Get a logo and professional email for only R550 at Big Canvas">
  <meta property="og:image" content="https://www.bigcanvas.co.za/img/banner.jpg">
  <meta property="og:url" content="https://www.bigcanvas.co.za/">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#111f3b"/>
	<title>Get in touch with us | Based in Johannesburg</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/stylelist.css">
	<style>
	    body {
	        background-image: linear-gradient(227deg, #3a4aff, #ff00f2);
	        background-size: cover;
	    }
	    
	    /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        
        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
        
	</style>
</head>
<body>
	<?php include('head.php') ?>

		<div class="container">
			
			<div id="contact-form">
				<form action="user.php" method="POST">
					<h1>Welcome to<br> Big Canvas</h1>
                    <h3>We are a multi-disciplinary design studio based in the city of gold Johannesburg.<br> We specialize in:<br> <span id="mini-anime"></span></h3><br>
                    <!--<h3>Looking for a logo and a professional email, for only R550.00 we can help design your logo and setup a professional email. To get in contact with us you can leave your details below and we will get back to you as soon as possible</h3><br>-->
					<label>Name</label><br><br>
					<input type="text" name="name" required placeholder="Enter name"><br><br>

					<label>Email</label><br><br>
					<input type="email" name="email" required placeholder="Enter email"><br><br>
					
					<label>Contact number</label><br><br>
					<input type="number" name="whatsapp" required placeholder="Enter contact details"><br><br>

					<label>Message</label><br><br>
					<textarea id="txtmsg" type="text" name="msg"></textarea><br><br>

					<button type="submit" name="submit" data-submit="...Sending">Submit</button><br><br>
				</form>
			</div>

		</div>
	</div>

	<?php include('bottom.php') ?>

	<?php include('tab.php') ?>

<script src="js/main.js"></script>
<script>
    var ma = document.querySelector("#mini-anime");
    ma.style.fontSize = "x-large";
    var wrds = ["Logo Design", "Web Design", "Web Development", "Ecommerce", "AR Development"]
    var num =  0;
    window.addEventListener("load", () => {
        setInterval(() => {
            if (num == wrds.length) {
                num = 0;
            }
            ma.innerHTML = wrds[num];
            if (num == 1) {
                ma.style.color = "yellow";
            } else {
                ma.style.color = "#fff";
            }
            num++;
        }, 300)
    })
</script>


</body>
</html>