<?php
require_once("db_conn.php");
require_once("function.php");
session_start();

if (isset($_SESSION['login_active'])) {
	header("Location: dashboard.php");
	exit();
} else {
	if (!empty($_POST['uname']) && !empty($_POST['password'])) {
		$uname = validacija($_POST['uname']);
		$pass = validacija($_POST['password']);

		$sql = "SELECT * FROM korisnici WHERE email='$uname'; ";

		$conn = otvoriKonekciju();

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			while ($row = mysqli_fetch_assoc($result)) {
				if ($row['lozinka'] === $pass) {
					$_SESSION['login_active'] = [$row["ime"], $row["prezime"], $row["id"], $row["najbolji_rez"]];
					$_SESSION['msg'] = "Dobrodošli na kontrolnu ploču";
					$_SESSION['class'] = "text-bg-success";
					header("Location: dashboard.php");
					exit();
				} else {
					header("Location: login.php?error=Netačna korisnička šifra!!!");
					exit();
				}
			}
		} else {
			header("Location: login.php?error=Netačno korisničko ime!!!");
			exit();
		}

		zatvoriKonekciju($conn);
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PRIJAVA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/login.css">


</head>

<body>
	<form method="post">
		<h2>PRIJAVA</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Korisničko ime</label>
		<input type="text" name="uname" required oninvalid="this.setCustomValidity('Unesite vaše korisničko ime (EMAIL)!!!')" onkeyup="setCustomValidity('')" placeholder="Email"><br>

		<label>Šifra</label>
		<input type="password" name="password" required oninvalid="this.setCustomValidity('Unesite vašu šifru!!!')" onkeyup="setCustomValidity('')" placeholder="Šifra"><br>

		<button type="submit" name="login">PRIJAVI SE</button>
	</form>

	<div class="py-4 text-center">
		<a href="registration.php">REGISTRACIJA</a>
	</div>
</body>

</html>