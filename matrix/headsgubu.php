<header>
		<div class="container">
			<div id="header">
				<div id="logo">
					<a id="brand" href="../index.php"><img src="https://www.bigcanvas.co.za/img/thebc2.png" width="40"></a>
				</div>
				<div id="title">
					<h1>Big Canvas</h1>
					<div id="demo"></div>
				</div>
				<nav>
					<ul>
						<li class="nav-item" id="navigation">
							<a class="links" onclick="deskhome()" href="javascript:void(0)">
							<?php 
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
									echo "<a class='links' href='../login'>Log In</a>"; 
							}else {
								echo "<a class='links' href='#'>".htmlspecialchars($_SESSION["name"])."</a>";
							};
							?>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a class="links" onclick="deskgallery()" href="http://www.sishuba.co.za">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="links" href="#theList">Books</a>
						</li>
						<li class="nav-item">
							<a class="links" onclick="deskuser()" href="http://www.sishuba.co.za">Contact</a>
						</li> -->
					</ul>
				</nav>
				<!--<div id="user-on-head">-->
				<!--	<a href="javascript:void(0)" class="btn-open">-->
				<!--			<div id=open-svg>-->
	   <!--                         <div class="openmenu"></div>-->
	   <!--                     </div>-->
	   <!--             </a>-->
	   <!--             <a href="javascript:void(0)" class="btn-close">-->
    <!--                	<div id=close-svg width="30" height="30">-->
	   <!--                         <path d="M0,0 30,30" stroke="#000" stroke-width="2"/> -->
	   <!--                         <path d="M0,30 30,0" stroke="#000" stroke-width="2"/>-->
	   <!--                 </div>-->
    <!--                </a>-->
				<!--</div>-->
				
			</div>
			<div id="side-menu" class="side-nav">
				<?php 
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
						echo "<a class='sdeNav' href='../login'>Sign In</a>"; 
					}else {
						echo "<p class='sdeNav'><u>".htmlspecialchars($_SESSION["name"])."</u></p>";
					};
				?>
                <a class="sdeNav" href="../index.php">Home</a>
                <a class="sdeNav" href="../contact-us">Leave Message</a>
				<?php 
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
						 
					}else {
						echo "<a class='sdeNav' href='../logout'>Log Out</a>"; 
					};
				?>
            </div>

			</div>
			
		</div>
	</header>