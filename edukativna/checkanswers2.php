<?php
session_start();
require_once("db_conn.php");
require_once("function2.php");

if (isset($_POST['answer-submit'])) {
	// Provjera da li su pitanja uopšte pokušavana odgovoriti
	if (!empty($_POST['provjeriodgovor'])) {
		// Brojac tacnih odgovora
		$brojacTacnihOdg = 0;
		$selected = $_POST['provjeriodgovor'];
		$sql = "SELECT * FROM pitanja2";

		$conn = otvoriKonekciju();

		$result = mysqli_query($conn, $sql);
		$i = 1;

		while ($row = mysqli_fetch_assoc($result)) {
			// Uporedi odgovor iz baze podataka sa odgovorom koji je
			// korisnk selektovao u formi. Ako se odgovor podudario
			// brojacTacnihOdg se inkrementira za 1
			if ($row['oid'] == $selected[$i]) {
				$brojacTacnihOdg++;
			}

			$i++;
		}

		// U sesiju spremljen broj pitanja na koje smo dali odgovor i brojac tacnih 
		// kako bi ih koristili na result stranici
		$_SESSION['rjesavano'] = count($_POST['provjeriodgovor']);
		$_SESSION['rezultat'] = $brojacTacnihOdg;

		//Procitaj aktuelni highscore 
		$_SESSION['max'] = vratiNajboljiRezultat($conn, $_SESSION['login_active']['2']);

		if ($_SESSION['max'] < $_SESSION['rezultat']) {
			// Azuriranje highscore-a
			azurirajNajboljiRezultat($conn, $_SESSION['rezultat'], $_SESSION['login_active']['2']);
			// Procitaj highscore
			$_SESSION['max'] = vratiNajboljiRezultat($conn, $_SESSION['login_active']['2']);
		}

		zatvoriKonekciju($conn);

		header("Location: result2.php");
		exit();
	} else {
		// Ako pitanja nisu pokusavana postavi varijable na nulu
		$_SESSION['rjesavano'] = 0;
		$_SESSION['rezultat'] = 0;

		$conn = otvoriKonekciju();
		$_SESSION['max'] = vratiNajboljiRezultat($conn,  $_SESSION['login_active']['2']);
		zatvoriKonekciju($conn);

		header("Location: result2.php");
		exit();
	}
}
