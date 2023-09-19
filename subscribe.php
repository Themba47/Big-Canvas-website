<?php
	session_start();
	require_once "config.php";

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $whatsapp='Subscribe 1';
    $msg='Subscribe 1';
    
    
    $query = mysqli_query($con, "INSERT INTO bc_clients (name, whatsapp, email, msg) VALUES ('$name', '$whatsapp', '$email', '$msg')");

    $to='sishubats@gmail.com';
    $headers="info@bigcanvas.co.za";
    $subject='Subscription Big Canvas: '.$name."\n";
    
    $message="Name: ".$name."\n"."Email: ".$email."\n"."Whatsapp number: ".$whatsapp."\n"."message: ".$msg."\n";
    
   if(mail($to, $subject, $message, $headers) && $query){
      echo "<p id='phpmsg'>Sent Successfully! Thank you for subscribing</p>";
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
	<meta name="description" content="subscribe to big canvas">
  <meta name="keywords" content="business card, create, free">
   <meta property="og:title" content="Subscribe to big canvas">
   <meta property="og:image" content="https://www.bigcanvas.co.za/img/banner.jpg">
  <meta property="og:url" content="bit.ly/4aCanV5">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#111f3b"/>
	<title>Subscribe </title>
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
					    
						<p style="font-size: xx-large;">Learn how to code through building projects <br> 
						<br><br>
						<!--<a href="javascript:window.scrollBy(0, 450);">-->
						<!--    Leave a message -->
						<!--	<i class="fas fa-angle-down"></i>-->
						<!--</a>-->
						</p>
					</div>
					
				</div>
			</section>

            <section class="section" id="info" data-aos="fade-right">
					<div class="love1" id="con4">
						<div class="content">
                            <video width="100%" id="background-vid-desktop" autoplay muted loop playsinline>
  						            <source src="img/thematrix.mp4" type="video/mp4">
					            </video>
						</div>
						<div class="about-me">
							
                            
							<h5>
							    Are you learning how to code or you already a developer looking to better your frontend skills, well subscribe to the big canvas newsletter to get coding blogs and snippets that will help you improve<br><br>
							    
							  For our next project we will be building a music player so subscribe quickly so you don't miss out.
                            </h5><br><br>
                            
                            <div class="outter-wrapper">
            <div class="wrapper" id="register_form">
                <form action="whatsapp.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                        
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" required placeholder="name@gmail.com">
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div> 
                    
                    
                    <!--<div class="form-group">-->
                    <!--    <label>Message</label>-->
                    <!--    <input type="text" name="msg" class="form-control" placeholder="Message">-->
                    <!--    <span class="invalid-feedback"><?php echo $email_err; ?></span>-->
                    <!--</div> -->
                    
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary" data-submit="...Sending">Submit</button><br><br>
                    </div>
                  
                </form>
            </div>  
        </div>
						</div>
					</div>
				</section>
				
			
			
        
		
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