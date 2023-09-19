<script src="js/main.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<div class="container">
			<div id="header">
				<div id="logo">
					<a id="brand" href="#"><img style="filter: invert(100%);" src="img/mswenko.png" width="75"></a>
				</div>
				<div id="title">
					<a href="index.php">Mswenko Barber</a>
					<div id="demo"></div>
				</div>
				<nav>
					<ul>
						<li class="nav-item" id="navigation">
							<a class="links" onclick="deskhome()" href="#service">Home</a>
						</li>
						<li class="nav-item">
							<a class="links" onclick="deskgallery()" href="book.php">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="links" onclick="deskuser()" href="#contact">Contact Us</a>
						</li>
					</ul>
				</nav>
				<div id="login">
					<?php 

					if (session_status() == PHP_SESSION_NONE) {
						session_start();
					}
					if (isset($_SESSION['emailaddress']))
					{
						echo "<p id='welcome-name'>Welcome " .$_SESSION['emailaddress'] . "";
						echo "<a class='log' href='logout.php'>Log Out</a></p>";
					}
					else
								{
								echo "<a class='log' href='signin.php'>Login</a>&nbsp;&nbsp;&nbsp;";
								echo "<a class='log' href='validatesignup.php'>Signup</a></td></tr>";
								}


					?>
				</div>
			</div>
			
		</div>
	</header>