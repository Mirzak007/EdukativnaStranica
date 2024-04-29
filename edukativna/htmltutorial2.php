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
<h1>HTML Basics</h1>

<button onclick="otvoriproslu()">VRATI</button>
<button onclick="otvoriiducu()">DALJE</button>
<p>
U ovom poglavlju pokazat ćemo neke osnovne primjere HTML-a.
<br>
Nemojte se brinuti ako koristimo oznake o kojima još niste naučili.
</p>

<h1>
HTML Dokumenti
</h1>
<p>

Svi HTML dokumenti započinju deklaracijom: &lt;!DOCTYPE html&gt;.
<br>

Sami HTML okument započinje sa: &lt;html&gt; i završava sa &lt;/html&gt;.
<br>

Vidljivi dio u HTML dokumentu je između: &lt;body&gt; iz &lt;/body&gt;.
</p>

<h1>
    Jednostavan primjer HTML-a
    </h1>
    <div class="section_desno">
    <div class="editor_kontejner">
        <h1>HTML Primjer:</h1>
        <div class="editor" id="htmlkod">
            <code>
&lt;!DOCTYPE html&gt;
<br>
&lt;html&gt;
<br>
&lt;head&gt;
<br>
&lt;title&gt;Naslov stranice&lt;/title&gt;
<br>
&lt;/head&gt;
<br>
&lt;body&gt;
<br>
&lt;h1&gt;Moj prvi Heading.&lt;/h1&gt;
<br>
&lt;p&gt;Moj prvi Paragraf.&lt;/p&gt;
<br>


&lt;/body&gt;
<br>

&lt;/html&gt;
</code>
        </div>
        <button class="editor_btn">Pokušaj sam</button>     
    </div>
</div>

<p>
Pritisnite na "Pokušaj sam" dugme da započnete programirati!
</p>

<h1>Deklaracija <!DOCTYPE></h1>
<br>
<p><!DOCTYPE> deklaracija predstavlja tip dokumenta, i pomaže web pretraživču da predstavi stranice pravilno.
<br>
Mora se pojaviti samo jednom, na vrhu stranice (ispred bilo koje HTML oznake).
<br>
Deklaracija <!DOCTYPE> ne razlikuje velika i mala slova.
<br>
<!DOCTYPE> deklaracija za HTML5 je:</p>

<h1>
    Jednostavan primjer HTML-a
    </h1>
    <div class="section_desno">
    <div class="editor_kontejner2">
        <div class="editor2" id="htmlkod">
            <code>
            &lt;!DOCTYPE html&gt;

            </code>
</div>
</div>
</div>

<h1>HTML Heading/Naslov</h1>

<p>HTML naslov definiran je s &lt;h1&gt; do &lt;h6&gt; oznake.
<br>
&lt;h1&gt; definira najvažniji naslov. &lt;h6&gt; definira najmanje važan naslov: </p>


<h1>
    Jednostavan primjer HTML-a
    </h1>
    <div class="section_desno">
    <div class="editor_kontejner">
        <h1>HTML Primjer:</h1>
        <div class="editor3" id="htmlkod">
            <code>
            &lt;h1&gt;Ovo je heading/naslov 1&lt;/h1&gt;
            <br>
            &lt;h2&gt;Ovo je heading/naslov 2&lt;/h2&gt;
            <br>
            &lt;h3&gt;Ovo je heading/naslov 3&lt;/h3&gt;

</code>
        </div>
        <button class="editor_btn">Pokušaj sam</button>     
    </div>
</div>


<h1>HTML Paragrafi</h1>
<p>HTML paragrafi oddređeni su sa: &lt;p&gt; tag:</p>


<h1>
    Jednostavan primjer HTML-a
    </h1>
    <div class="section_desno">
    <div class="editor_kontejner">
        <h1>HTML Primjer:</h1>
        <div class="editor3" id="htmlkod">
            <code>
            &lt;p&gt;Ovo je paragraf.&lt;/p&gt;
            <br>
            &lt;p&gt;Ovo je još jedanparagraf.&lt;/p&gt;

</code>
        </div>
        <button class="editor_btn">Pokušaj sam</button>     
    </div>
</div>

<h1>HTML Linkovi</h1>
<p>HTML linkovi određeni su sa:  &lt;a&gt; tag:</p>.


<h1>
    Jednostavan primjer HTML-a
    </h1>
    <div class="section_desno2">
    <div class="editor_kontejner2">
        <div class="editor4" id="htmlkod">
            <code>
            &lt;a href="https://www.youtube.com"&gt;This is a link&lt;/a&gt;

            </code>
</div>
</div>
</div>

<p>
Odredište veze navedeno je u atributu href.
<br>
Atributi se koriste za pružanje dodatnih informacija o HTML elementima.
<br>
Naučit ćete više o atributima u sljedećem poglavlju.
</p>

<h1>HTML Slike</h1>

<p>HTML slike su definirane s &lt;img&gt; označiti.
<br>
Izvorna datoteka (src), alternativni tekst (alt), širina i visina navedeni su kao atributi:</p>

<h1>
    Jednostavan primjer HTML-a
    </h1>
    <div class="section_desno3">
    <div class="editor_kontejner2">
        <div class="editor5" id="htmlkod">
            <code>
            &lt;img src="ikona.jpg" alt="ikona1" width="104" height="142"&gt;

            </code>
</div>
</div>
</div>
<br>
  <br>
  <br>

<button onclick="otvoriproslu()">VRATI</button>
<button onclick="otvoriiducu()">DALJE</button>
<br>
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
  window.location.href = 'htmltutorial3.php';
}
function otvoriproslu() {
  window.location.href = 'htmltutorial1.php';
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