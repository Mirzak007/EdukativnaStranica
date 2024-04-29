<?php
require_once("db_conn.php");

function validacija($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function ukupanBrojPitanja()
{
	$conn = otvoriKonekciju();

	$sql = "SELECT * FROM pitanja ";
	$result = mysqli_query($conn, $sql);

	zatvoriKonekciju($conn);

	return mysqli_num_rows($result);
}


function vratiNajboljiRezultat($conn, $idKorisnika)
{
	$sqlSelectHighScore = "SELECT * FROM korisnici WHERE id='$idKorisnika' ";

	$resultHighScore = mysqli_query($conn, $sqlSelectHighScore);

	$rowHighScore = mysqli_fetch_assoc($resultHighScore);

	return $rowHighScore['najbolji_rez'];
}

function azurirajNajboljiRezultat($conn, $rez, $idKorisnika)
{
	$sqlUpdateHighScore = "UPDATE korisnici SET najbolji_rez='$rez' WHERE id='$idKorisnika' ";

	mysqli_query($conn, $sqlUpdateHighScore);
}
