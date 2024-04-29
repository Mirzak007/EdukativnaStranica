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



<h1>Javascript, gdje započeti</h1>

<button onclick="otvoriproslu()">VRATI</button>

<h1>&lt;script&gt; tag</h1>

<p>U HTML-u, JavaScript kod je umetnut između &lt;script&gt; i &lt;/script&gt; oznake.</p>

<div class="section_desno4">
    <div class="editor_kontejner2">
        <div class="editor11" id="htmlkod">
            <code>
            &lt;script&gt;
            <br>
            document.getElementById("demo").innerHTML = "My First JavaScript";
            <br>
            &lt;script&gt;

            </code>
</div>
</div>
</div>

<p>Stari primjeri JavaScripta mogu koristiti atribut tipa: &lt;script type="text/javascript"&gt;.
     <br>
Atribut tipa nije potreban. JavaScript je zadani skriptni jezik u HTML-u.</p>

<h1>JavaScript funkcije i događaji</h1>

<p>Funkcija JavaScript je blok JavaScript koda koji se može izvršiti kada se "pozove".
<br>
Na primjer, funkcija se može pozvati kada se dogodi događaj, na primjer kada korisnik klikne gumb.</p>

<p>Naučit ćete mnogo više o funkcijama i događajima u kasnijim poglavljima.</p>

<h1>JavaScript u &lt;head&gt; ili &lt;body&gt;</h1>

<p>U HTML dokument možete postaviti bilo koji broj skripti.

Skripte se mogu postaviti u &lt;body&gt;, ili u &lt;head&gt; dijelu HTML stranice ili u oba.</p>


<h1>JavaScript u &lt;head&gt;</h1>
<p>U ovom primjeru, JavaScript funkcija smještena je u &lt;head&gt; dio HTML stranice.

Funkcija se poziva (poziva) kada se klikne gumb:</p>

<div class="section_desno4">
    <div class="editor_kontejner2">
        <div class="editor12" id="htmlkod">
            <code>
            &lt;!DOCTYPE html&gt;
            <br>
            &lt;html&gt;
            <br>
            &lt;head&gt;
            <br>
            &lt;script&gt;
            <br>
            function myFunction()
            <br>
            {
                <br>
                &nbsp;&nbsp;document.getElementById("demo").innerHTML = "Paragraph changed.";
                <br>
            }
            <br>
            &lt;/script&gt;
            <br>
            &lt;/head&gt;
            <br>
            &lt;body&gt;
            <br>
            &lt;h2&gt;Demo JavaScript u head&lt;/h2&gt;
            <br>
            &lt;p id="demo"&gt;A Paragraph&lt;/p&gt;
            <br>
            &lt;button type="button" onclick="myFunction()"&gt;Isprobaj&lt;/button&gt;
            <br>
            &lt;/body&gt;
            <br>
            &lt;/html&gt;

            </code>
</div>
</div>
</div>

<h1>JavaScript u  &lt;body&gt;</h1>
<p>U ovom primjeru, JavaScript funkcija smještena je u &lt;body&gt; dio HTML stranice.

Funkcija se poziva (poziva) kada se klikne gumb:</p>
<div class="section_desno4">
    <div class="editor_kontejner2">
        <div class="editor13" id="htmlkod">
            <code>
            &lt;!DOCTYPE html&gt;
            <br>
            &lt;html&gt;
            <br>
            &lt;body&gt;
            <br>
            &lt;h2&gt;Demo JavaScript u Body&lt;/h2&gt;
            <br>
            &lt;p id="demo"&gt;Paragraf&lt;/p&gt;
            <br>
            &lt;button type="button" onclick="mojFunction()"&gt;Try it&lt;/button&gt;
            <br>
            &lt;script&gt;
            <br>
            function mojFunction() 
            <br>
            {
                <br>
                document.getElementById("demo").innerHTML = "Paragraph changed.";
                <br>
            }
            <br>
            &lt;/script&gt;
            <br>
            &lt;/body&gt;
            <br>
            &lt;/html&gt;

            </code>
</div>
</div>
</div>
<p>Postavljanje skripti na dno &lt;tijela&gt; element poboljšava brzinu prikaza jer interpretacija skripte usporava prikaz.</p>

<h1>Vanjski JavaScript</h1>
<p>Skripte se također mogu smjestiti u vanjske datoteke:</p>

<div class="section_desno4">
    <div class="editor_kontejner2">
        <div class="editor14" id="htmlkod">
            <code>
    
            function mojFunction()
            <br> 
            {
                <br>
                document.getElementById("demo").innerHTML = "Paragraph changed.";
            <br>
            }
            </code>
</div>
</div>
</div>

<p>Vanjske skripte praktične su kada se isti kod koristi na mnogo različitih web stranica.

JavaScript datoteke imaju datotečni nastavak .js.
<br>


Za korištenje vanjske skripte, stavite naziv datoteke skripte u atribut src (izvor) &lt;script&gt; oznaka:</p>
<br>


<div class="section_desno">
    <div class="editor_kontejner2">
        <div class="editor7" id="htmlkod">
            <code>
            &lt;script&gt; src="mojaSkripta.js">&lt;/script&gt;
            </code>
</div>
</div>
</div>

<p>Možete postaviti vanjsku referencu skripte u &lt;head&gt; ili &lt;tijelo&gt; kako hoćeš.

Skripta će se ponašati kao da se nalazi točno tamo gdje je &lt;script&gt; oznaka se nalazi.</p>

<h1>Vanjske prednosti JavaScripta</h1>

<p>Postavljanje skripti u vanjske datoteke ima neke prednosti:

Odvaja HTML i kod
<br>
Čini HTML i JavaScript lakšim za čitanje i održavanje
<br>

Predmemorirane JavaScript datoteke mogu ubrzati učitavanje stranica
<br>

Za dodavanje nekoliko datoteka skripte na jednu stranicu - koristite nekoliko oznaka skripte:</p>

<div class="section_desno2">
    <div class="editor_kontejner2">
        <div class="editor15" id="htmlkod">
            <code>
            &lt;script&gt; src="myScript1.js">&lt;/script&gt;
            <br>
            &lt;script&gt; src="myScript2.js">&lt;/script&gt;

            </code>
</div>
</div>
</div>

<h1>Vanjske reference</h1>

<p>Vanjska skripta može se referencirati na 3 različita načina:

S punim URL-om (puna web adresa)
<br>

S putanjom datoteke (poput /js/)
<br>

Bez ikakvog puta
<br>

Ovaj primjer koristi puni URL za vezu na myScript.js:</p>

<div class="section_desno4">
    <div class="editor_kontejner2">
        <div class="editor16" id="htmlkod">
            <code>
            &lt;script&gt; src="https://www.w3schools.com/js/mojaSkripta.js">&lt;/script&gt;

            </code>
</div>
</div>
</div>
<p>Ovaj primjer koristi put datoteke za povezivanje na myScript.js:</p>

<div class="section_desno2">

    <div class="editor_kontejner2">
        <div class="editor4" id="htmlkod">
            <code>
            &lt;script&gt; src="/js/mojaSkripta.js">&lt;/script&gt;
            </code>
</div>
</div>
</div>
<p>Ovaj primjer ne koristi put za povezivanje na myScript.js:</p>

<div class="section_desno">
    <div class="editor_kontejner2">
        <div class="editor7" id="htmlkod">
            <code>
            &lt;script&gt; src="mojaSkripta.js">&lt;/script&gt;

            </code>
</div>
</div>
</div>
<br>
<br>


<button onclick="otvoriproslu()">VRATI</button>

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

function otvoriiducu() {
  window.location.href = 'jstutorial3.php';
}
function otvoriproslu() {
  window.location.href = 'jstutorial1.php';
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