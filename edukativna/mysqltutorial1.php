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

<h1>SQL Uvod</h1>
<p>SQL je standardni jezik za pristup i rukovanje bazama podataka.</p>
<h1>Što je SQL?</h1>
<p>SQL je kratica za Structured Query Language
     <br>
SQL vam omogućuje pristup i rukovanje bazama podataka
<br>
SQL je postao standard Američkog nacionalnog instituta za standarde (ANSI) 1986., a Međunarodne organizacije za standardizaciju (ISO) 1987.
</p>
<h1>Što SQL može?</h1>
<p>
SQL može izvršavati upite prema bazi podataka
<br>
SQL može dohvatiti podatke iz baze podataka
<br>
SQL može umetnuti zapise u bazu podataka
<br>
SQL može ažurirati zapise u bazi podataka
<br>
SQL može brisati zapise iz baze podataka
<br>
SQL može stvoriti nove baze podataka
<br>
SQL može stvoriti nove tablice u bazi podataka
<br>
SQL može stvoriti pohranjene procedure u bazi podataka
<br>
SQL može stvoriti prikaze u bazi podataka
<br>
SQL može postaviti dopuštenja za tablice, procedure i prikaze

</p>
<h1>SQL je standard - ALI....</h1>
<p>Iako je SQL ANSI/ISO standard, postoje različite verzije SQL jezika.
<br>
Međutim, kako bi bili usklađeni s ANSI standardom, svi podržavaju barem glavne naredbe (kao što su SELECT, UPDATE, DELETE, INSERT, WHERE) na sličan način.</p>

<h1>Korištenje SQL-a na vašoj web stranici</h1>
<p>Da biste napravili web mjesto koje prikazuje podatke iz baze podataka, trebat će vam:

RDBMS program baze podataka (tj. MS Access, SQL Server, MySQL)
<br>
Za korištenje skriptnog jezika na strani poslužitelja, poput PHP-a ili ASP-a
<br>
Za korištenje SQL-a za dobivanje podataka koje želite
<br>
Za korištenje HTML-a/CSS-a za stiliziranje stranice</p>

<h1>RDBMS</h1>

<p>RDBMS je kratica za sustav upravljanja relacijskom bazom podataka.
<br>
RDBMS je osnova za SQL, ali i za sve moderne sustave baza podataka kao što su MS SQL Server, IBM DB2, Oracle, MySQL i Microsoft Access.
<br>
Podaci u RDBMS-u pohranjuju se u objekte baze podataka koji se nazivaju tablice. Tablica je zbirka povezanih podataka i sastoji se od stupaca i redaka.
<br>
Pogledajte tablicu "Kupci":</p>

<div class="section_desno">
    <div class="editor_kontejner2">
        <div class="editor7" id="htmlkod">
            <code>
            SELECT * FROM Korisnici;

            </code>
</div>
</div>
</div>

<p>
Svaka tablica razbijena je na manje cjeline koje se nazivaju polja. Polja u tablici Kupci sastoje se od CustomerID-a, CustomerName-a, ContactName-a, Address-a, City-a, PostalCode-a i Country-a. Polje je stupac u tablici koji je dizajniran za održavanje specifičnih informacija o svakom zapisu u tablici.

Zapis, koji se naziva i red, svaki je pojedinačni unos koji postoji u tablici. Na primjer, postoji 91 zapis u gornjoj tablici Kupci. Zapis je horizontalni entitet u tablici.

Stupac je vertikalni entitet u tablici koji sadrži sve informacije povezane s određenim poljem u tablici.
</p>
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