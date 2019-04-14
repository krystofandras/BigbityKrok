<?php
ob_start();
require('conn.php');

$ename = $_POST['ename'];

$time = $_POST['time'];
$date = $_POST['date'];
$place = $_POST['place'];
$text = $_POST['text'];
if (empty($ename)){
	echo"nezadal jsi název události retarde";
}
elseif (empty($date)){
	echo"nezadal jsi datum události retarde";
}
elseif (empty($time)){
	echo"nezadal jsi čas události retarde";
}
elseif (empty($place)){
	echo"nezadal jsi místo události retarde";
}
else {
	$sql = "INSERT INTO events (name, time, date, place, text)
VALUES ('$ename', '$time', '$date', '$place', '$text')";

if ($conn->query($sql) === TRUE) {
    echo "Událost úspěšně vytvořena";
	header( "refresh:2;url=http://bigbityrock.cz/admin/" );
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
ob_end_flush();
?>