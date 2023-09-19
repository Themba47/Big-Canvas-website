<?php
	session_start();
	require_once "config.php";

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $whatsapp= 'query about newsletter';
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

<script data-ad-client="ca-pub-2085627779889164" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Create your own business card with our easy to use business card builder, create and download your business card for free.">
  <meta name="keywords" content="business card, create, free">
   <meta property="og:title" content="Create your own business card with our easy to use business card builder, create and download your business card for free.">
  <meta property="og:image" content="https://www.bigcanvas.co.za/img/bc1.jpg">
  <meta property="og:url" content="bit.ly/4aCanV5">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#111f3b"/>
	<title>Create your business card with Big Canvas</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="css/stylelist.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<style>

        #welcome-page {
            height: 60vh;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

		.listpage {
			display: grid;
    		place-items: center;
            height: 60vh;
    		
		}

		.listpage p {
			text-align: center;
			color: #fff;
			font-size: xx-large;
		}

		.listpage p a {
			border-radius: 15px;
			background-color: #ff00f2;
			padding: 1%;
			color: #fff;
		}

        .content {
            margin: 0 10%;
            padding: 5%;
        }

        .about-me {
            margin: 5%;
        }

		.content h1 {
			font-size: xx-large;
		}
		 @media (max-width: 768px) {
			 .listpage {
				 padding: 0 5%;
			 }
			 .listpage p {
			text-align: center;
			color: #fff;
			font-size: x-large;
		}
		 }
	</style>
</head>
<body>
	<?php include('head.php') ?>

<div class="main" id="lebron">
    
            <div class="page-loader" id="pge-load">
    			<div class="loader">
    				<img src="img/sun_loader.png">
    			</div>
		    </div>

			<section class="section" id="welcome-page">
				<div class="love">
					<div class="listpage">
					    
						<p>Looking for an email marketing software so you can send out emails to your subscribers <br> 
						<br><br>
						<a href="javascript:window.scrollBy(0, 450);">
						    Leave a message 
							<i class="fas fa-angle-down"></i>
						</a>
						</p>
					</div>
					
				</div>
			</section>

            <section class="section" id="info" data-aos="fade-right">
					<div class="love1" id="con4">
						<div class="content">
                                <video width="100%" id="background-vid-desktop" autoplay muted loop playsinline>
  						            <source src="img/create_invoice.mov" type="video/mp4">
					            </video>						
                        </div>
						<div class="about-me">
							<h5>
                                With the new email marketing software, you can send out emails to your all you subscribers with one click. The software also comes with an editor so you can create your email and send it out easily and quickly. <br>
                            </h5><br>
                            <h5>
                                Pricing for the software starts at R399 where you will be able to send 10 000 emails.<br>
                                try the free version by <a href="matrix/invoice1.php"> clicking here</a>
                            </h5>
							
						</div>
					</div>
				</section>
				
			
			
        <div class="outter-wrapper">
            <div class="wrapper" id="register_form">
                <h2>Get in contact</h2>
                <p>Please fill this form and we will get back to you.</p>
                <form action="info.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                        
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" required placeholder="name@gmail.com">
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div> 
                    
                    <div class="form-group">
                        <label>Message</label>
                        <input type="text" name="msg" class="form-control" placeholder="Message">
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div> 
                    
                    <div class="form-group">
                        <input type="submit" id="submit-btn" class="btn btn-primary" value="Submit">
                    </div>
                  
                </form>
            </div>  
        </div>
		
	</div>
	
	
	

	<?php include('bottom.php') ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script type="text/javascript" src="js/ga.js"></script>
<script type="text/javascript" src="js/main.js"></script>


</script>
</body>
</html>