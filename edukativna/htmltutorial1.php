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
<h1>HTML Tutorial</h1>

    <button onclick="otvoriiducu()">DALJE</button>
    
    <h1>Šta je HTML?</h1>

<p>
    HTML označava Hiper Tekst Markup Jezik.
    <br>
    HTML je standardni jezik za označavanje koji se koristi za kreiranje web stranica.
    <br>
    HTML opisuje strukturu web stranice.
    <br>
    HTML se sastoji od niza elemenata.
    <br>
    HTML elementi govore pregledniku kako prikazati sadržaj.
    <br>
    HTML elementi označavaju dijelove sadržaja kao što su "ovo je naslov", "ovo je odlomak", "ovo je link", itd.
</p>

<h1>Jednostavan primjer HTML-a</h1>

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
                &lt;h1&gt;Moj prvi naslov&lt;/h1&gt;
                <br>
                &lt;p&gt;Moj prvi odlomak.&lt;/p&gt;
                <br>
                &lt;/body&gt;
                <br>
                &lt;/html&gt;
            </code>
        </div>
        <button class="editor_btn">Pokušaj sam</button>     
    </div>
</div>

<p>Kliknite na dugme "Probaj sam" da vidite kako radi.</p>

<h1>Primjer objašnjenja</h1>

<p>
    Deklaracija &lt;!DOCTYPE html&gt; definiše da je ovaj dokument HTML5 dokument.
    <br>
    Element &lt;html&gt; je glavni element HTML stranice.
    <br>
    Element &lt;head&gt; sadrži meta informacije o HTML stranici.
    <br>
    Element &lt;title&gt; određuje naslov HTML stranice (koji se prikazuje u traci pregledača ili na kartici stranice).
    <br>
    Element &lt;body&gt; definiše body dokumenta i sadrži sve vidljive sadržaje kao što su naslovi, odlomci, slike, linkovi, tabele, liste, itd.
    <br>
    Element &lt;h1&gt; definiše veliki naslov.
    <br>
    Element &lt;p&gt; definiše odlomak.
</p>

<h1>Šta je HTML Element?</h1>

<p>
    HTML element je definiran početnom oznakom, sadržajem i završnom oznakom:
    <br>
    &lt;imeoznake&gt; Ovdje ide sadržaj... &lt;/imeoznake&gt;
    <br>
    HTML element je sve od početne do završne oznake:
    <br>
    &lt;h1&gt;Moj prvi naslov&lt;/h1&gt;
    <br>
    &lt;p&gt;Moj prvi odlomak.&lt;/p&gt;
</p>

<h1>Web preglednici</h1>

<p>
    Svrsih web preglednika (Chrome, Edge, Firefox, Safari) je da čitaju HTML dokumente i prikazuju ih ispravno.
    <br>
    Preglednik ne prikazuje HTML oznake, već ih koristi da odredi kako prikazati dokument.
</p>
<br>
  <br>

<img class="teorija" src="slike/htmlt1.png">
<br>
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
  window.location.href = 'htmltutorial2.php';
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