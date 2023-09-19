<html>
<head>
<script type="text/JavaScript" src="js/checkform.js"></script>
</head>
<body>
    <form action="addcustomer.php" method="post" onsubmit="return
    validate(this);">
<table border="0" cellspacing="1" cellpadding="3">
<tr><td colspan="2" align="center">Enter your information</td>
            </tr>
            <tr><td>Name  </td><td><input size="50" type="text"
            name="naam"></td></tr>
            <tr><td>Surname  </td><td><input size="50" type="text"
            name="surname"></td></tr>
            <tr><td>Email Address: </td><td><input size="20" type="text"
            name="emailaddress"></td></tr>
            <tr><td>Password: </td><td><input size="20" type="password"
            name="password"></td></tr>
            <tr><td>ReType Password:  </td><td><input size="20"
            type="password" name="repassword"></td></tr>
            <tr><td>Phone No:  </td><td><input size="30" type="text"
            name="phone_no"></td></tr>
            <tr><td><input type="submit" name="submit" value="Submit"></td><td>
            <input type="reset" value="Cancel"></td></tr>
        </table>
    </form>
</body>
</html>