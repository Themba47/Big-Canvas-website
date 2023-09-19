<?php
session_start();
require_once "config.php";
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    $blog='blog 1';

    $query = mysqli_query($con, "INSERT INTO bc_clients (name, whatsapp, email, msg) VALUES ('$name', '$blog', '$email', '$msg')");
    
    if($query){
        $_SESSION["msg"] = "<p id='phpmsg'>Sent Successfully! Thank you for your message</p>";
        header("location: index.php");
        }
     else{
        echo "Something went wrong!";
     }
}

?>
<section class="section" id="summary">
				<div class="context">
					<div class="thesummary" id="thesocial">
						<h1>Leave A Comment</h1>
						<div class="comment-section">
							<form action="../comments.php" method="POST">
								<input style="display: none;" type="text" value="Range by david Epstein">
								<label>Name</label><br><br>
								<input type="text" name="name" required placeholder="Enter name"><br><br>

								<label>Email</label><br><br>
								<input type="email" name="email" required placeholder="Enter email"><br><br>
				
								<label>Comment</label><br><br>
								<textarea id="txtmsg" type="text" name="msg" placeholder="type comment..."></textarea><br><br>

								<button style="padding: 1.5% 1.5%;" type="submit" name="submit" data-submit="...Sending">Submit</button><br><br>

							</form>
						</div>
					</div>
				</div>
			</section>