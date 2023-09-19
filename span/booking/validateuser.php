<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>
<body>
<?php
include('head.php');
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
$connect = mysqli_connect("avaritia.aserv.co.za:3306", "sishudql", "myX6~91)b(G8", "sishudql_book") or die("Please, check your server connection.");
$query = "SELECT email, password, name FROM customers WHERE email like '" . $_POST['emailaddress'] . "' " .
"AND password like (PASSWORD('" . $_POST['password'] . "'))";
$result = mysqli_query($connect, $query) or die(mysql_error());
if (mysqli_num_rows($result) == 1) {
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
extract($row);
echo header("Location: http://sishuba.co.za/span/booking/book.php?loginsuccess"); $_SESSION['emailaddress'] = $_POST['emailaddress']; $_SESSION['emailaddress'] = $_POST['emailaddress'];
$_SESSION['password'] = $_POST['password'];

}
}
else {
?>
Invalid Email address and/or Password<br>
Not registered?
<a href="validatesignup.php">Click here</a> to register.<br><br><br>
Want to Try again<br>
<a href="signin.php">Click here</a> to try login again.<br>
<?php
} ?>
</body>
</html>