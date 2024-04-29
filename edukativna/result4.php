<?php
session_start();
require_once("db_conn.php");
require_once("function4.php");

if (!isset($_SESSION['login_active'])) {
  header("Location: login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukativna stranica</title>
    <link rel="icon" src="slike/logo.png">
    <link rel="stylesheet" href="css/edu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--Google Font Family poppins-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
    rel="stylesheet">
<!--Google font Family Source sans pro-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
    rel="stylesheet">

<!--Google font family freckle face-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Freckle+Face&display=swap" rel="stylesheet">

<!--Jos dodatnih css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-lijevo">
            <a href="#">
            <div class="edu-logo">
                <img src="slike/logo.png" onclick="otvorihome()">
            </div>
        </a>
        <div href="#Tutoriali" class="meni-btn" id="Tutoriali-btn">
            Tutoriali
            <i class=" fa-solid fa-caret-down"></i>
        </div>
        <div onclick="otvoridash()" href="#Vjezbe" class="meni-btn" id="Vjezbe-btn">
            Vježbe
            <i  onclick="otvoridash()"></i>
        </div>
        </div>
        <div class="header-desno">
           
        
        <div class="d-flex">
            <a class="btn btn-danger" href="logout.php">Odjava</a>
          </div>
    </div>
    </header>

<div class="podkategorija podkategorija_hidden" id="podkategorija_id">
    <div class="podkategorija_zatvori-btn" id="podkategorija_zatvori-btn">
        <button><i class="fa-solid fa-xmark" class="meni-btn"></i></button>
    </div>

    <div class="podkategorija_sadrzaj">
        <h1>Tutoriali</h1>
        <div class="podkategorija_sadrzaj_data">
            <div class="podkategorija_predmeti">
                <h2>HTML i CSS</h2>
                <a href="htmltutorial1.php">Nauci HTML</a>
                <a href="csstutorial1.php">Nauci CSS</a>
            </div>

            <div class="podkategorija_predmeti">
                <h2>Javascript</h2>
                <a href="">Nauci Javascript</a>
            
            </div>

            <div class="podkategorija_predmeti">
                <h2>Server</h2>
                <a href="">Nauci SQL</a>
                <a href="">Nauci PHP</a>
            </div>

        </div>
    </div>
</div>
  <section class="main-section">
    <form>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <?php if ($_SESSION['rezultat'] == 0) : ?>
              <div class="card my-2 p-3 text-center">
                <div class="card-body">
                  <h5 class="card-title py-2 text-center">Nije bilo tačnih odgovora na pitanja !!!</h5>
                  <a class="btn btn-warning">Vaš trenutni rezultat je : <?php echo $_SESSION['rezultat']; ?></a>
                  <br>
                  <br>
                  <a class="btn btn-danger btn-lg">VAŠ NAJBOLJI REZULTAT JE: <?php echo $_SESSION['max']; ?></a>
                </div>
              </div>
            <?php else : ?>
              <div class="card my-2 p-3 text-center">
                <div class="card-body">
                  <h5 class="card-title py-2 text-center">Pokušali ste <?php echo $_SESSION['rjesavano']; ?>
                    od ukupno <?php echo ukupanBrojPitanja(); ?> pitanja.
                  </h5>
                  <a class="btn btn-warning">
                    <?php echo $_SESSION['login_active']['0'], ' ',  $_SESSION['login_active']['1']; ?>,
                    <?php if ($_SESSION['rezultat'] == 1) : ?>
                      Vaš trenutni rezultat je : <?php echo $_SESSION['rezultat']; ?> uspješno odgovoreno pitanje !
                    <?php elseif ($_SESSION['rezultat'] >= 2 && $_SESSION['rezultat'] <= 4) : ?>
                      Vaš trenutni rezultat je : <?php echo $_SESSION['rezultat']; ?> uspješno odgovorena pitanja !
                    <?php else : ?>
                      Vaš trenutni rezultat je : <?php echo $_SESSION['rezultat']; ?> uspješno odgovorenih pitanja !
                    <?php endif ?>
                  </a>
                  <br>
                  <br>
                  <a class="btn btn-danger btn-lg">VAŠ NAJBOLJI REZULTAT JE: <?php echo $_SESSION['max']; ?>
                  </a>
                </div>
              </div>
            <?php endif ?>

            <div class="card my-2 p-3 text-center">
              <div class="card-body">
                <a class="btn btn-info" href="quiz4.php">Započnite kviz ponovo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <script>
const podkategorija=document.getElementById("podkategorija_id");
let Tutorialbtn=document.getElementById("Tutoriali-btn");
const podkategorijazatvori=document.getElementById("podkategorija_zatvori-btn");

Tutorialbtn.addEventListener("click",toggleTutorial);
podkategorija.addEventListener("click",toggleTutorial);

function toggleTutorial(){
    Tutorialbtn.classList.toggle("bg-black");
    Tutorialbtn.classList.remove("text-white");/*nema razloga da ovo ne radi jer bukvalno promijeni boju pozadine ali neee javascript je odlucio da ne izvrsi ono sto trazim od njega */
    podkategorija.classList.toggle("podkategorija_hidden");
 }

 function otvoriQuiz() {
  window.location.href = 'quiz.php';
}
function otvoridash() {
  window.location.href = 'dashboard.php';
}
function otvorihome() {
  window.location.href = 'edu.php';
}
 </script>
</body>

</html>