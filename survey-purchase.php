<?php
	session_start();
	require_once "config.php";
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
						 
    }else {
        echo $_SESSION["msg"];
        $_SESSION["msg"] = ""; 
    };

if (isset($_POST['token'])) {

    $yoco_token = $_POST['token']; 
    $yoco_ticket = (int)$_POST['ticket'];
    $yoco_value = (int)($_POST['price']);

    // values extracted from request
$data = [
    'token' => $yoco_token, // Your token for this transaction here
    'amountInCents' => $yoco_value, // payment in cents amount here
    'currency' => 'ZAR' // currency here
];


// Anonymous test key. Replace with your key.
$secret_key = 'sk_live_831ada57z7KoWAB27534f6583576';

// Initialise the curl handle
$ch = curl_init();

// Setup curl
curl_setopt($ch, CURLOPT_URL,"https://online.yoco.com/v1/charges/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

// Basic Authentication method
// Specify the secret key using the CURLOPT_USERPWD option
curl_setopt($ch, CURLOPT_USERPWD, $secret_key . ":");

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// send to yoco
$result = curl_exec($ch);
curl_getinfo($ch, CURLINFO_HTTP_CODE);

// close the connection
curl_close($ch);

// convert response to a usable object
$response = json_decode($result, true);
    
$query = mysqli_query($con, "UPDATE user_table SET survey_token = ".$yoco_ticket." WHERE userid = '".$_SESSION["userid"]."' ");

if($response["status"]) {
    echo "<p id='phpmsg'>Your have purchased ".$yoco_ticket." questions</p>";
} else {
    echo "<p id='phpmsg' style='background-color: #cc6969;'>Purchase Unsuccesful</p>";
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

<script src="https://js.yoco.com/sdk/v1/yoco-sdk-web.js"></script>
    
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Create surveys quickly and easily for your business for free. Big canvas provides an easy survey builder which you can share with your clients and customers. Recieve notifications when someone completes your survey and build better engagement with your clients or customers.">
  <meta name="keywords" content="business, survey, free, surveys">
   <meta property="og:title" content="Create your quiz quickly and easily for your business for free.">
  <meta property="og:image" content="https://www.bigcanvas.co.za/img/bc1.jpg">
  <meta property="og:url" content="https://www.bigcanvas.co.za/survey-purchase">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#111f3b"/>
	<title>Big Canvas: Create your quiz</title>
	 <link rel="shortcut icon" type="image/png" href="img/favicon.png"> 
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet">
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
		    width: 300px;
			text-align: center;
			color: #fff;
			font-size: xx-large;
		}

		.listpage p a {
			border-radius: 7.5px;
			background-color: #ff00f2;
			padding: 2%;
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

        .purchase-table {
            display: grid;
            margin: 4%;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .package {
            border: 2px solid #1e1f31;
            border-radius: 15px;
            padding: 1%;
            margin: 4%;
            text-align: center;
        }

        .yoco-inputs {
			height: 0;
			overflow: hidden;
			transition: all .5s ease-out;
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
        .purchase-table {
            grid-template-columns: 1fr;
        }
		 }
	</style>
</head>
<body>
	<?php include('head.php') ?>

<div class="main" id="lebron">
    
      <!--      <div class="page-loader" id="pge-load">-->
    		<!--	<div class="loader">-->
    		<!--		<img src="img/sun_loader.png">-->
    		<!--	</div>-->
		    <!--</div>-->

			<section class="section" id="welcome-page">
				<div class="love">
					<div class="listpage">
                    <p>
                    Learn more from your customers through a quiz funnel<br><br>
						<?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                                echo '<a href="/login?next=/v1/setquestions.php"><small>Create Quiz
							<i class="fas fa-angle-right"></i>
                            </small>
						</a>';
                            }else{
                                echo '<a href="/v1/setquestions.php"><small>Create Quiz
							<i class="fas fa-angle-right"></i>
                            </small>
						</a>';
                            } 
                            ?>
						</p>
					</div>
					
				</div>
			</section>

            <section class="section" id="info" data-aos="fade-right">
					<div class="love1" id="con4">
						<div class="content">
                            <video width="100%" style="border-radius: 15px;" id="background-vid-desktop" autoplay muted loop controls playsinline>
  						        <source src="img/survey-vid.mov" type="video/mp4">
					           </video>
						</div>
						<div class="about-me">
							<h5>
							    Looking to get important insight on your products or you have a training program or service and you want to find out the issues your potential customers are going through. Well now you can ask them by creating your own quiz quickly and easily. 
							    
                            </h5><br>
                            <div class="content sub-content">
							<img src="img/doyouworkout.png" style="border-radius: 15px;" width="70%">
							
						    </div>
                            <h5>You can create a quick quiz 
                            <?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                                echo '<a href="/login?next=/v1/setquestions.php">here</a>';
                            }else{
                                echo '<a href="/v1/setquestions.php">here</a>';
                            } 
                            ?>
                                
                                which will only allow you to create 7 questions. If you need to add more questions, you can purchase one of the packages at the bottom which will provide you with a token so you can add the amount of questions you need.</h5>
							<!-- <ul>
								<li>Send out invoices</li><br>   
								
								<li>Surveys</li><br>
								<li>Bookings</li><br>
                                <li>Alerts</li><br>
                                <li>Updates on shipping</li><br>
							</ul> -->
						</div>
					</div>
				</section>

                <?php 
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
									echo '<section class="purchase-table">
									<div class="package">
                                        <h3>1 - 7 questions</h3>
                                        <p>FREE</p>
                                        <a href="login.php?next=/v1/setquestions.php" class="buy-token">Create</a>
                                    </div>
                                    <div class="package">
                                        <h3>1 - 20 questions</h3>
                                        <p>ZAR 99.00</p>
                                        <a href="login.php?next=/survey-purchase.php" class="buy-token">Buy</a>
                                    </div>
                                    <div class="package">
                                        <h3>1 - 60 questions</h3>
                                        <p>ZAR 139.00</p>
                                        <a href="login.php?next=/survey-purchase.php" class="buy-token">Buy</a>
                                    </div>
                                    <div class="package">
                                        <h3>Custom</h3>
                                        <a href="login.php?next=/survey-purchase.php" class="buy-token">Get in contact</a>
                                    </div>
                                </section>'; 
							}else {
								echo '<section class="purchase-table">
								<div class="package">
                                    <h3>1 - 7 questions</h3>
                                    <p>FREE</p>
                                    <a href="/v1/setquestions.php" class="buy-token">Create</a>
                                </div>
                                <div class="package">
                                    <h3>1 - 20 questions</h3>
                                    <p>ZAR 99.00</p>
                                    <a href="javascript:void(0)" class="buy-token" onclick="vulaYoco(1)">Buy</a>
                                </div>
                                <div class="package">
                                    <h3>1 - 60 questions</h3>
                                    <p>ZAR 139.00</p>
                                    <a href="javascript:void(0)" class="buy-token" onclick="vulaYoco(3)">Buy</a>
                                </div>
                                <div class="package">
                                    <h3>Custom</h3>
                                    <a href="contact-us" class="buy-token">Get in contact</a>
                                </div>
                            </section>';
							};
							?>
			
        <div class="outter-wrapper">
            <div class="wrapper" style="display: none;" id="register_form">
            <div class="payment-gateway">
						<form id="payment-form" name="yocoform" action="survey-purchase.php" method="POST">
						  <div class="one-liner">
							  <!-- <p style="color: #000;"><i class="fas fa-file-archive"></i>  Buy questions token</p> -->
							  <div class="yoco-inputs">

								  <label style="width: 100%;">
                                    <input id="yoco_ticket" name="ticket" required type="hidden">
									  <input id="yoco_token" name="token" required type="hidden">
									  <input id="yoco_price" name="price" required type="hidden">
								  </label>

								  <!-- <div class="billing-info">
									  <p class="info-headings"><u>Billing information</u></p>
									  <label style="width: 100%;">
										  <input id="yoco_email" name="email" placeholder="Email" required type="email"><br>
									  </label>
								  </div> -->

								  <p class="info-headings"><u>Payment information</u></p>
								  <div id="card-frame">
								  <!-- Yoco Inline form will be added here -->
								  </div><br>
							  	</div>

							<button class="btn btn-primary rounded-pill" id="pay-button">
							  BUY
							</button>
						  </div>
				      	<p class="success-payment-message"></p>
						</form><br><br>

					</div>
            </div>  
        </div>
		
	</div>
	
	
	

	<?php include('bottom.php') ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="js/ga.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>
  AOS.init();

  // Replace the supplied `publicKey` with your own.
  // Ensure that in production you use a production public_key.
  var sdk = new window.YocoSDK({
    publicKey: 'pk_live_c040c326z4kndq530794'
  });

  // Create a new dropin form instance
  var inline = sdk.inline({
    layout: 'basic',
    amountInCents: survey_package[1],
    currency: 'ZAR'
  });
  // this ID matches the id of the element we created earlier.
  inline.mount('#card-frame');

  // Run our code when your form is submitted
  var form = document.getElementById('payment-form');
  var submitButton = document.getElementById('pay-button');
  form.addEventListener('submit', function (event) {
    event.preventDefault()
    // Disable the button to prevent multiple clicks while processing
    submitButton.disabled = true;
    // This is the inline object we created earlier with the sdk
    inline.createToken().then(function (result) {
      // Re-enable button now that request is complete
      // (i.e. on success, on error and when auth is cancelled)
      submitButton.disabled = false;
      if (result.error) {
        const errorMessage = result.error.message;
        errorMessage && alert("error occured: " + errorMessage);
      } else {
        const token = result;
        document.forms["yocoform"]["token"].value = token.id;
        document.forms["yocoform"]["ticket"].value = survey_package[0];
        document.forms["yocoform"]["price"].value = survey_package[1];
        document.forms.yocoform.submit();
      }
    }).catch(function (error) {
      // Re-enable button now that request is complete
      submitButton.disabled = false;
      alert("error occured: " + error);
    });
  });
</script>


</script>
</body>
</html>