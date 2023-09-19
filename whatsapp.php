<?php
	session_start();
	require_once "config.php";

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $whatsapp='Whatsapp Api msg';
    $msg='Whatsapp Api msg';
    
    
    $query = mysqli_query($con, "INSERT INTO bc_clients (name, whatsapp, email, msg) VALUES ('$name', '$whatsapp', '$email', '$msg')");

    $to='sishubats@gmail.com';
    $headers="info@bigcanvas.co.za";
    $subject='Whatsapp Business Api: '.$name."\n";
    
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
	<meta name="description" content="Looking for a sms marketing software or a whatsapp marketing software, well with big canvas you can send bulk SMS's and whatsapp updates to your customers.">
  <meta name="keywords" content="sms marketing software, whatsapp marketing software, send bulk SMS's">
   <meta property="og:title" content="Automate your messages and send newsletters and alerts with the whatsapp api.">
  <meta property="og:image" content="https://www.bigcanvas.co.za/img/whatsappposter.jpg">
  <meta property="og:url" content="bit.ly/4aCanV5">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#111f3b"/>
	<title>Send bulk SMS's and whatsapp messages to your customers with one click </title>
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
            margin: 0 5%;
            padding: 5%;
        }

        .about-me {
            margin: 5%;
        }

		.content h1 {
			font-size: xx-large;
		}

        .sub-content {
            display: grid;
            grid-template-columns: 40% 1fr;
            color: #1e1f31;
        }

        #signupbtn {
            border-radius: 10px;
            font-size: x-large;
            background-color: #ff00f2;
            padding: 2%;
            color: #fff;
        }

        .sub-content div {
            text-align: left;
        }
        .sub-content a {
            display: initial;
        }

        .sub-content img {
            padding: 5%;
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
        .sub-content {
            margin-top: 60px;
            grid-template-columns: 1fr;
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

			<section class="section" id="info" data-aos="fade-right">
					<div class="love" id="con3">
						<div class="content sub-content">
                            <div>
								<h2>Send bulk sms's and whatsapp messages to your customers
                                    with one click.
                                </h2>
                                <p>With the big canvas platform you can send sms's and whatsapp messages for abandoned carts, delivery alerts, promotions and more to all
                                    your customers. Save your customer list, select the numbers you want to send to, select if you want to send a SMS or whatsapp, create your message and click send, that easy.
                                </p><br>
                                <p>If you interested in the big canvas platform click the button to leave your email and we will get back to you.</p>
                                <a id="signupbtn" href="javascript:window.scrollBy(0, 450);">
                                    Sign Up 
						        </a>
                            </div>
							   <img id="yepe" src="img/mownewsletter-post.png" width=50%">
						</div>
					</div>
			</section>

            <!-- <section class="section" id="info" data-aos="fade-right">
					<div class="love1" id="con4">
						<div class="content">
                            <video width="100%" id="background-vid-desktop" autoplay muted loop playsinline>
  						            <source src="img/whatsapprec.mp4" type="video/mp4">
					            </video>
						</div>
						<div class="about-me">
							
                            <h5><u>With the whatsapp api, you can automate tasks such as: </u></h5>
							<ul>
								<li>Send out invoices</li><br>   
								
								<li>Surveys</li><br>
								<li>Bookings</li><br>
                                <li>Alerts</li><br>
                                <li>Updates on shipping</li><br>
                                <li>Updates on your system</li><br>
							</ul><br>
							<h5>
							    With the whatsapp api you can automate alot of the conversations while also getting closer to your customers. You can use the API to send weekly newsletters, alerts, payment links and more all via whatsapp.<br><br>
							    
							  If you looking to integrate the whatsapp api please leave your email in the form below.
                            </h5><br>
						</div>
					</div>
				</section> -->
				
			
			
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