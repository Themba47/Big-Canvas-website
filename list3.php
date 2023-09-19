<?php
  session_start();
  

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
    <link rel="stylesheet" type="text/css" href="css/stylelist.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<style>.listpage{display:grid;place-items:center;height:100vh}.listpage p{text-align:center;color:#fff;font-size:xx-large}.listpage p a{border-radius:15px;background-color:#ff00f2;padding:1%;color:#fff}.content h1{font-size:xx-large}@media (max-width:768px){.listpage{padding:0 5%}.listpage p{text-align:center;color:#fff;font-size:x-large}}
	</style>
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
								<h2>
								    Create an amazing business card or email newsletter for your business
                                </h2>
                                <p>Welcome to the card maker, here you can make a business card for yourself, a qr code or you can send email newsletters to your customers
                                </p><br>
                                
                                <a id="signupbtn" href="javascript:window.scrollBy(0, 750);">
                                    Get Started 
						        </a>
                            </div>
							   <img id="yepe" src="img/aicv-post.png" width=50%">
						</div>
					</div>
			</section>
			
		<div class="container" id="gallery-work">
		</div>
		
	</div>
	
	
	

	<?php include('bottom.php') ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script type="text/javascript" src="js/ga.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>
	var gw = document.getElementById("gallery-work");
	var myDiv = '';
	var mylist = [
	    {
			name: "newsletter template",
			link: "matrix/template-1",
			image: "bcnewsletter.jpg",
			paid:  false,
			price: 0
		},
		{
			name: "newsletter invoice",
			link: "matrix/invoice1",
			image: "bcnewsletter.jpg",
			paid:  false,
			price: 0
		},
		{
			name: "card",
			link: "matrix/bcback2",
			image: "bccards2.jpg",
			paid:  false,
			price: 0
		},
		{
			name: "gradient card",
			link: "matrix/4",
			image: "bc4.jpg",
			paid:  false,
			price: 0
		},
		{
			name: "business-card 1",
			link: "matrix/1",
			image: "bc1.jpg",
			paid:  false,
			price: 0
		},
		{
			name: "business-card 2",
			link: "matrix/2",
			image: "bc2.jpg",
			paid:  false,
			price: 0
		},
		{
			name: "business-card 3",
			link: "matrix/3",
			image: "bc3.jpg",
			paid:  false,
			price: 0
		},
		{
			name: "back of business-card 1",
			link: "matrix/bcback.php",
			image: "bcback.jpg",
			paid:  false,
			price: 0
		},
	];

	for(let i = 0; i < mylist.length; i++) {
		var paidOrFree = mylist[i].paid ? `R${mylist[i].price}`: "Free";
		myDiv += `<section class="section" id="info" data-aos="fade-right">
				<a href="${mylist[i].link}">
					<div class="love">
						<div class="diespan mereko" style="background-image: url(img/${mylist[i].image});"></div>
					</div><br>
					<label>${mylist[i].name}</label><br>
					<small>${paidOrFree}</small>
				</a>
			</section>`;
	}

	gw.innerHTML = myDiv;

</script>
</body>
</html>