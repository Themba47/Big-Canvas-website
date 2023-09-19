<div class="main" id="lebron">
		<div class="container">

		<div class="page-loader" id="pge-load">
				<div class="loader">
					<img src="img/sun_loader.png">
				</div>
			</div>
			
			<section class="section" id="welcome-page">
				<div class="love">
					<div class="content">
					
						<div class="my-profile">
							<div id="thiza"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="section" id="welcome-page-color">
				<div class="love">
					<div class="content welcome_txt">
					    <?php 
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
						 
					}else {
						echo $_SESSION["msg"];
						$_SESSION["msg"] = ""; 
					};
				?>
						<h1>Welcome to <br> Big Canvas</h1>
						<a id="views-span" href="survey-purchase">
						    Create Your Quiz
						
						</a>
					</div>
				</div>
			</section>

			<div class="fireworks" id="the-shit">
				<section class="section" id="info" data-aos="fade-right">
					<div class="love1" id="con4">
						<div class="content">
							<a href="myabout.php"><img id="yepe" class="about-pic" src="img/create.png" width="100%"></a>
						</div>
						<div class="about-me">
							<h3>Hey👋, welcome to Big Canvas. We at Big Canvas pride ourselves on creating amazing platforms to help grow your presence and expand your customer base.</h3>

							<h3><u>Services provided: </u></h3>
							<ul>
							    <li>Web development</li><br>   
								<!--<li>Ecommerce platforms</li><br>-->
								<li>Custom Audio Visualizer</li><br>
								<li>Augmented Reality development</li><br>
								<!--<li>Custom Email Newsletter</li><br>-->
								<!--<li>Whatsapp Business Api</li><br>-->
							</ul>
							
						</div>
					</div>
				</section>
				

				<section class="section" id="info">
					<div class="love">
						<div class="content">
							<a href="contact-us" class="leave-msg">Contact Us</a>
						</div>
					</div>
				</section>
				
				<div class="thy_span"><p>Create Survey</p></div>

				<section class="section" id="info" data-aos="fade-right">
					<div class="love" id="con3">
						<div class="content sub-content">
						    <a href="survey-purchase">
						    <h2>Create a survey or quiz and get the information you need.</h2>
				                <video width="100%" id="background-vid-desktop" autoplay muted loop playsinline>
  						            <source src="img/survey-vid.mov" type="video/mp4">
					            </video></a>
				            </a>
						</div>
					</div>
				</section>
				
				<div class="thy_span"><p>Create Newsletter</p></div>

				<section class="section" id="info" data-aos="fade-right">
					<div class="love" id="con3">
						<div class="content sub-content">
				            <a href="list"><img id="yepe" src="img/bcnewsletter.jpg" width="100%">
				            <h2>Create stunning newsletters for your business and easily send them out with our cool newsletter tool.</h2>
				            </a>
						</div>
					</div>
				</section>

				<div class="thy_span"><p>Whatsapp Business Api</p></div>

				<section class="section" id="info" data-aos="fade-right">
					<div class="love" id="con3">
						<div class="content sub-content">
						    <a href="whatsapp-api">
								<h2>Looking to add whatsapp business api to your business</h2>
							   <img id="yepe" src="img/whatsapp-chatbot.jpeg" width="100%"></a>
				
						</div>
					</div>
				</section>
				
				<div class="thy_span"><p>Projects</p></div>

				<section class="section" id="info" data-aos="fade-right">
					<div class="love" id="con3">
						<div class="content sub-content">
							<a href="projects">
							    <video width="100%" id="background-vid-desktop" autoplay muted loop playsinline>
  						            <source src="img/pexels-kindel-media-7578547.mp4" type="video/mp4">
					            </video>
							<h2>Check out some of the projects</h2>
							</a>
						</div>
					</div>
				</section>
				
				
				<div class="thy_span"><p>Gallery</p></div>

				<section class="section" id="info" data-aos="fade-right">
					<div class="love" id="con3">
						<div class="content sub-content">
						    <a href="gallery">
						    <h2>Check out the list of audio visualizer tools</h2>
							    <video width="100%" id="background-vid-desktop" autoplay muted loop playsinline>
  						            <source src="img/g2.mov" type="video/mp4">
					            </video>
							</a>
						</div>
					</div>
				</section>
				
				<div class="thy_span"><p>About Big Canvas</p></div>


				<section class="section" id="info" data-aos="fade-right">
					<div class="love">
						<div class="content sub-content">
							<img id="yepe" src="https://cdn.britannica.com/s:700x500/49/100349-050-24E63356/view-central-business-district-Johannesburg-South-Africa.jpg" width="100%">
							<h2>We based in the city of gold Johannesburg</h2>
							
						</div>
					</div>
				</section>
			</div>

			<section class="section" id="info">
					<div class="love">
						<div class="content">
							<a href="contact-us" class="leave-msg">Contact Us</a>
						</div>
					</div>
				</section>
				
<!--				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2085627779889164"-->
<!--     crossorigin="anonymous"></script>-->
<!-- box style -->
<!--<ins class="adsbygoogle"-->
<!--     style="display:block"-->
<!--     data-ad-client="ca-pub-2085627779889164"-->
<!--     data-ad-slot="2141290132"-->
<!--     data-ad-format="auto"-->
<!--     data-full-width-responsive="true"></ins>-->
<!--<script>-->
<!--     (adsbygoogle = window.adsbygoogle || []).push({});-->
<!--</script>-->

		</div>
	</div>