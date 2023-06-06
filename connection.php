<?php

$conn = "";

try {
	$servername = "localhost:3306";
	$dbname = "templedbms";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=templedbms,$email, $pass");
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
session_abort();
?>
