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
<h1>PHP Uvod</h1>

<p>PHP kod se izvršava na poslužitelju.</p>

<h1>Što biste već trebali znati</h1>

<p>
Prije nego nastavite, trebali biste imati osnovno razumijevanje sljedećeg:
HTML
CSS
JavaScript
Ako prvo želite učiti ove predmete, pronađite lekcije na našoj početnoj stranici.
</p>

<h1>Što je PHP?</h1>

<p>
PHP je akronim za "PHP: Hypertext Preprocessor"
PHP je naširoko korišten skriptni jezik otvorenog koda
PHP skripte se izvršavaju na poslužitelju
PHP je besplatan za preuzimanje i korištenje
</p>

<h1>Što je PHP datoteka?</h1>

<p>PHP datoteke mogu sadržavati tekst, HTML, CSS, JavaScript i PHP kôd
     <br>
PHP kod se izvršava na poslužitelju, a rezultat se vraća pregledniku kao obični HTML
<br>
PHP datoteke imaju nastavak ".php"
</p>

<h1>Što može PHP?</h1>

<p>PHP može generirati dinamički sadržaj stranice
PHP može stvarati, otvarati, čitati, pisati, brisati i zatvarati datoteke na poslužitelju
PHP može prikupljati podatke obrazaca
PHP može slati i primati kolačiće
PHP može dodavati, brisati, mijenjati podatke u vašoj bazi podataka
PHP se može koristiti za kontrolu korisničkog pristupa
PHP može šifrirati podatke</p>

<p>S PHP-om niste ograničeni na izlazni HTML. Možete ispisati slike ili PDF datoteke. Također možete ispisati bilo koji tekst, kao što su XHTML i XML.</p>

<h1>Zašto PHP?</h1>
<p>PHP radi na raznim platformama (Windows, Linux, Unix, Mac OS X, itd.)
PHP je kompatibilan s gotovo svim poslužiteljima koji se danas koriste (Apache, IIS, itd.)
PHP podržava širok raspon baza podataka
PHP je besplatan. Preuzmite ga sa službenog PHP resursa: www.php.net
PHP je jednostavan za naučiti i radi učinkovito na strani poslužitelja
</p>

<h1>Osnovna PHP sintaksa</h1>
<p>
PHP skripta može se postaviti bilo gdje u dokumentu.

PHP skripta počinje s &lt;?php i završava s ?&gt;:
</p>

<div class="section_desno">
    <div class="editor_kontejner2">
        <div class="editor7" id="htmlkod">
            <code>
            &lt;?php echo:"Proba php-a" ?&gt;

            </code>
</div>
</div>
</div>
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
    window.location.href = 'dashboard.php';

}
function otvorihome() {
  window.location.href = 'edu.php';
}
</script>
</body>
</html>