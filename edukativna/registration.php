<?php
require_once("db_conn.php");
require_once("function.php");
session_start();

if (!empty($_POST['ime']) && !empty($_POST['prezime']) && !empty($_POST['mail']) && !empty($_POST['password'])) {
	$ime = validacija($_POST['ime']);
	$prezime = validacija($_POST['prezime']);
	$mail = validacija($_POST['mail']);
	$password = validacija($_POST['password']);

	$sql = "INSERT INTO korisnici (ime, prezime, email, lozinka, najbolji_rez) VALUES ('$ime', '$prezime', '$mail', '$password', '0');";

	$conn = otvoriKonekciju();

	if (mysqli_query($conn, $sql)) {
		$_SESSION['msg'] = "Uspješno ste se registrovali";
		$_SESSION['class'] = "text-bg-success";
		header("Location: login.php");
		exit();
	} else {
		$_SESSION['msg'] = "Neuspjela registracija";
		$_SESSION['class'] = "text-bg-danger";
		header("Location: login.php");
		exit();
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRACIJA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
	<form action="" method="post">
		<h2>REGISTRACIJA</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Ime: </label>
		<input type="text" name="ime" required oninvalid="this.setCustomValidity('Unesite vaše ime!!!')" onkeyup="setCustomValidity('')" placeholder="Ime"> <br>

		<label>Prezime: </label>
		<input type="text" name="prezime" required oninvalid="this.setCustomValidity('Unesite vaše prezime!!!')" onkeyup="setCustomValidity('')" placeholder="Prezime"> <br>

		<label>Email: </label>
		<input type="email" name="mail" required oninvalid="this.setCustomValidity('Unesite vaš email (KORISTIT ĆE SE KAO KORISNIČKO IME)!!!')" onkeyup="setCustomValidity('')" placeholder="Email"> <br>

		<label>Šifra: </label>
		<input type="password" name="password" required oninvalid="this.setCustomValidity('Unesite vašu šifru!!!')" onkeyup="setCustomValidity('')" placeholder="Šifra"> <br>

		<button type="submit">REGISTRUJ SE</button>
	</form>

	<div class="py-4 text-center">
		<a href="login.php" class="link">PRIJAVA</a>
	</div>
</body>

</html>