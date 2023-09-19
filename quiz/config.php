<?php

define('DB_SERVER', 'covenant.aserv.co.za');
define('DB_USERNAME', 'bigcafnt_thiza');
define('DB_PASSWORD', '$Olomzi47');
define('DB_NAME', 'bigcafnt_pulse');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false) {
	die("Error: Could not connect. " . mysqli_connect_error());
}

?>