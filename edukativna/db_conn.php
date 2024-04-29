<?php

function otvoriKonekciju()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "edukativna";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Provjeri konekciju, ako se pojavila greska prikazi poruku
	if (mysqli_connect_errno()) {
		echo "Neuspješna konekcija na MySQL: " . mysqli_connect_error();
		exit();
	}

	return $conn;
}

function zatvoriKonekciju($conn)
{
	$conn->close();
}
