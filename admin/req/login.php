<?php
ob_start();
require('conn.php');

$username = $_POST['user'];
$password = $_POST['pass'];

$sql="SELECT * FROM admins WHERE user='$username' and pass='$password'";
$result = $conn->query($sql);
$count=$result->num_rows;

if($result->num_rows > 0){
	session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
	echo "Čauky mňauky dej mi eventy";
	header( "refresh:2;url=http://bigbityrock.cz/admin/" );
	ob_end_flush();
}
else{
	echo"Špatné údaje";
}
$conn->close();
ob_end_flush();
?>