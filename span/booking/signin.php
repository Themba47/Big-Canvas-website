<?php
include('head.php');
?>
<html>
    <head>
    </head>
    <body style="padding-top: 100px;">
    <form action="validateuser.php" method="post">
        <div id="signin-page">
        <label>Email Address:</label><br><input type="text"
        name="emailaddress"><br><br>
        <label>Password:</label><br><input type="password" name="password">
        <br><br>
        <input class="buttons" type="submit" name="submit"
        value="Login">
        </div>
</form>
    </body>
</html>