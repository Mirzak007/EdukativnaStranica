<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukativna stranica</title>
    <link rel="icon" src="slike/logo.png">
    <link rel="stylesheet" href="css/edu2.css">
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
        <div onclick="otvoriQuiz()" href="#Vjezbe" class="meni-btn" id="Vjezbe-btn">
            Vjezbe
            <i  onclick="otvoriQuiz()"></i>
        </div>
        </div>
        <div class="header-desno">
           
        
        <a href="login.php" class="btn btn-link bg-green">
            Log in
        </a>
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
                <a href="jstutorial1.php">Nauci Javascript</a>
            
            </div>

            <div class="podkategorija_predmeti">
                <h2>Server</h2>
                <a href="mysqltutorial1.php">Nauci SQL</a>
                <a href="phptutorial1.php">Nauci PHP</a>
            </div>

        </div>
    </div>
</div>

<div class="glavni_sadrzaj">

<h1>JS Uvod</h1>
<button onclick="otvoriiducu()">DALJE</button>

<h1>JavaScript može promijeniti HTML sadržaj</h1>

<p>
Jedna od mnogih JavaScript HTML metoda je getElementById().

Primjer ispod "pronalazi" HTML element (s id="demo") i mijenja sadržaj elementa (innerHTML) u "Hello JavaScript":
</p>
    <div class="section_desno4">
    <div class="editor_kontejner2">
        <div class="editor10" id="htmlkod">
            <code>
            document.getElementById("demo").innerHTML = "Hello JavaScript";

            </code>
</div>
</div>
</div>
<br>
<br>
<h1>JavaScript može promijeniti HTML stilove (CSS)</h1>
<p>Promjena stila HTML elementa je varijanta promjene HTML atributa:</p>
<div class="section_desno3">
    <div class="editor_kontejner2">
        <div class="editor5" id="htmlkod">
            <code>
            document.getElementById("demo").style.fontSize = "35px";

            </code>
</div>
</div>
</div>
<br>
<br>
<h1>JavaScript može sakriti HTML elemente</h1>
<p>Skrivanje HTML elemenata može se izvršiti promjenom stila prikaza:</p>
<div class="section_desno3">
    <div class="editor_kontejner2">
        <div class="editor5" id="htmlkod">
            <code>
            document.getElementById("demo").style.display = "none";

            </code>
</div>
</div>
</div>
<br>
<br>
<h1>JavaScript može prikazati HTML elemente</h1>
<p>Prikazivanje skrivenih HTML elemenata također se može izvršiti promjenom stila prikaza:</p>
<div class="section_desno3">
    <div class="editor_kontejner2">
        <div class="editor5" id="htmlkod">
            <code>
            document.getElementById("demo").style.display = "block";

            </code>
</div>
</div>
</div>
<br>
<br>
<p>Jeste li znali?
JavaScript i Java potpuno su različiti jezici, kako konceptom tako i dizajnom.
<br>

JavaScript je izumio Brendan Eich 1995., a postao je ECMA standard 1997.
<br>
ECMA-262 je službeni naziv standarda. ECMAScript je službeni naziv jezika.</p>
<br>

<button onclick="otvoriiducu()">DALJE</button>  
  <br>
  <br>
  <br>
  <br>
  <footer>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-google-plus"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footerNav">
            <ul><li><a href="">Home</a></li>
                <li><a href="">Novosti</a></li>
                <li><a href="">O nama</a></li>
                <li><a href="">Kontakt</a></li>
                <li><a href="">Blog</a></li>
            </ul>
        </div>
        
    </div>
    <div class="footerBottom">
        <p>Stranicu napravio <span class="designer">Mirza Kozlica</span></p>
    </div>
</footer>
</div>

<script> function otvoriiducu() {
  window.location.href = 'jstutorial2.php';
}
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
    window.location.href = 'dashboard.php';

}
function otvorihome() {
  window.location.href = 'edu.php';
}
</script>
</body>
</html>