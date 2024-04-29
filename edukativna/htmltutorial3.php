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
<h1>HTML Elementi</h1>
<button onclick="otvoriproslu()">VRATI</button>



<p>HTML element definiran je početnom oznakom, nekim sadržajem i završnom oznakom.</p>
<h1>HTML elementi</h1>
<p>HTML element je sve od početne do završne oznake:</p>

<p>&lt;imetag-a&gt;Sadržaj ide ovdje...&lt;/imetag-a&gt;</p>

<p>Primjeri nekih HTML elemenata:</p>

<h1>&lt;h1&gt;Moj prvi naslov&lt;/h1&gt;</h1>

<h1>&lt;p&gt;Moj prvi odlomak.&lt;/p&gt;</h1>

<p>Napomena: Neki HTML elementi nemaju sadržaj (poput elementa &lt;br&gt;). Ti se elementi nazivaju praznim elementima. Prazni elementi nemaju završnu oznaku!</p>

<h1>Ugniježđeni HTML elementi</h1>

<p>
HTML elementi mogu biti ugniježđeni (to znači da elementi mogu sadržavati druge elemente).
<br>
Svi HTML dokumenti sastoje se od ugniježđenih HTML elemenata.
<br>
Sljedeći primjer sadrži četiri HTML elementa (&lt;html&gt;, &lt;body&gt;, &lt;h1&gt; i &lt;p&gt;):
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
&lt;h1&gt;Moj prvi heading/naslov.&lt;/h1&gt;
<br>
&lt;p&gt;Moj prvi paragraf.&lt;/p&gt;
<br>


&lt;/body&gt;
<br>

&lt;/html&gt;
</code>
        </div>
        <button class="editor_btn">Pokušaj sam</button>     
    </div>
</div>
<h1>Objašnjenje primjera</h1>

<p>
&lt;html&gt; element je korijenski element i definira cijeli HTML dokument.
<br>
Ima početnu oznaku &lt;html&gt; i završnu oznaku &lt;html&gt;.
<br>
Zatim, unutar &lt;html&gt; element postoji &lt;body&gt; element:
</p>

<h1>
    Jednostavan primjer HTML-a
    </h1>
    <div class="section_desno">
    <div class="editor_kontejner">
        <div class="editor6" id="htmlkod">
            <code>
            <body>
            &lt;body&gt;
            <br>
            <br>
            &lt;h1&gt;Moj prvi heading/naslov&lt;/h1&gt;
<br>
&lt;p&gt;Moj prvi paragraf.&lt;/p&gt;
<br>
<br>
&lt;/body&gt;
</code>
</div>
</div>
</div>

<p>
&lt;body&gt; element definira body dokumenta.
<br>
Ima početnu oznaku &lt;body&gt; i završnu oznaku &lt;/body&gt;.
<br>
Zatim, unutar &lt;body&gt; postoje još dva elementa: &lt;h1&gt; i &lt;p&gt; :
</p>

<div class="section_desno">
    <div class="editor_kontejner">
        <div class="editor3" id="htmlkod">
            <code>
            &lt;h1&gt;Moj prvi heading/naslov&lt;/h1&gt;
<br>
&lt;p&gt;Moj prvi paragraf.&lt;/p&gt;
</code>
        </div>  
    </div>
</div>

<p>&lt;h1&gt; element definira heading/naslov.
    <br>

Ima početni tag &lt;h1&gt; i završni tag &lt;/h1&gt;</p>

<div class="section_desno">
    <div class="editor_kontejner2">
        <div class="editor7" id="htmlkod">
            <code>
            &lt;h1&gt;Moj prvi heading/naslov&lt;/h1&gt;
            </code>
</div>
</div>
</div>

<p>
&lt;p&gt; element definira paragraf.
<br>
Ima početni tag &lt;p&gt; i završni tag &lt;/p&gt;</p>
</p>

<div class="section_desno">
    <div class="editor_kontejner2">
        <div class="editor7" id="htmlkod">
            <code>
            &lt;p&gt;Moj prvi paragraf.&lt;/p&gt;

            </code>
</div>
</div>
</div>

<h1>Nikad ne preskoči završni tag</h1>
<p>Neki HTML elementi prikazat će se ispravno, čak i ako zaboravite završni tag:</p>


    <div class="section_desno">
    <div class="editor_kontejner">
        <h1>HTML Primjer:</h1>
        <div class="editor8" id="htmlkod">
            <code>
&lt;!DOCTYPE html&gt;
<br>
&lt;html&gt;
<br>
&lt;body&gt;
<br>
&lt;p&gt;Moj prvi paragraph.
<br>
&lt;p&gt;Moj drugi paragraph.
<br>

&lt;/body&gt;
<br>

&lt;/html&gt;
</code>
        </div>
        <button class="editor_btn">Pokušaj sam</button>     
    </div>
</div>

<p>Međutim, nikada se ne oslanjajte na ovo! Ako zaboravite završnu oznaku, mogu se pojaviti neočekivani rezultati i pogreške!</p>

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
function otvoriproslu() {
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