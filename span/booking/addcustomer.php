<?php
$connect = mysqli_connect("avaritia.aserv.co.za:3306", "sishudql", "myX6~91)b(G8", "sishudql_book") or die
("Please, check the server connection.");
$name = $_POST['naam'];
$surname = $_POST['surname'];
$email = $_POST['emailaddress'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$cellnumber = $_POST['phone_no'];
$sql = "INSERT INTO customers (name, surname, email, password, cellnumber) VALUES ('$name', '$surname', '$email',(PASSWORD('$password')), '$cellnumber')";
$result = mysqli_query($connect, $sql) or die(mysql_error());
if ($result)
{
?>
<p>
    Dear, <?php echo $name; ?> your account is successfully created <a href="index.php">return to booking</a>
<?php
} else {
    echo "Some error occurred. Please use different email address";
}
?>