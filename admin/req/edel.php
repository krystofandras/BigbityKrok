<?php
ob_start();
require('conn.php');

$iddel = $_POST['d'];

$sql = "DELETE FROM events WHERE id=$iddel";

if ($conn->query($sql) === TRUE) {
    echo "Událost úspěšně smazána";
	header( "refresh:2;url=http://bigbityrock.cz/admin/" );
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
ob_end_flush();
?>