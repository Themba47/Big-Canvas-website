<header>
		<div class="container">
			<div id="header">
				<div id="logo">
					<a id="brand" href="index.php"><img src="../../img/thebclogo.png" width="80%"></a>
				</div>
				<div id="title">
					<a href="index.php"><h1>Big Canvas</h1></a>
					<div id="demo"></div>
				</div>
				<nav>
					<ul>
						
						<li class="nav-item">
						<?php 
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
									echo "<a class='links' href='login'>Log In</a>"; 
							}else {
								echo "<a class='links' href='mydetails'>".htmlspecialchars($_SESSION["name"])."</a>";
							};
							?>
						</li>
						<li class="nav-item">
							<a class="links" href="gallery">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="links" href="contact-us">Contact Us</a>
						</li>
						<li class="nav-item">
						<?php 
							if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
								
							}else {
								echo "<a class='links' href='logout.php'>Log out</a>"; 
							};
						?>
						</li>

					</ul>
				</nav>
				<div id="user-on-head">
					
					<?php 
						if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
							echo '<a href="login" id="loginbtn" style="font-size: 12pt; color: #000;">
							Log In</a>'; 
						}else {
							echo '<a href="javascript:void(0)" class="btn-open">
							<div id=open-svg>
	                            <div class="openmenu"></div>
	                        </div>
	                </a>
	                <a href="javascript:void(0)" class="btn-close">
                    	<div id=close-svg width="30" height="30">
	                            <path d="M0,0 30,30" stroke="#000" stroke-width="2"/> 
	                            <path d="M0,30 30,0" stroke="#000" stroke-width="2"/>
	                    </div>
                    </a>';
						};
					?>
				</div>
				
				
			</div>
			<div id="side-menu" class="side-nav">
			<?php 
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
						 
					}else {
						echo "<a class='sdeNav' href='mydetails'><u>".htmlspecialchars($_SESSION["name"])."</u></a>";
					};
				?>
				<a class="sdeNav" href="survey-purchase">Create Survey</a>
				<a class="sdeNav" href="gallery">Gallery</a>
                <a class="sdeNav" href="contact-us">Contact Us</a>
				<?php 
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
						 
					}else {
						echo "<a class='sdeNav' href='logout.php'>Log Out</a>"; 
					};
				?>
            </div>
			
		</div>
	</header>