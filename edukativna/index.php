<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/index.css">
    <script defer src="js/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<nav class="navbar">
		<div class="navdiv">
			<div class="logo"><a href="#">EduHow</a> </div>
			<ul>
				<li><a href="#">Priprema</a></li>
				<li><a href="#">Početak</a></li>
				<li><a href="#">Programiranje</a></li>
			</ul>
		</div>
        <br>
	</nav>

<center><h1 class="naslov">Kako napraviti edukativnu stranicu</h1></center>


<section class="hidden">
    <h1>1. Priprema</h1>
    <p>
        Dakle, za pravljenje edukativne stranice koristimo programe Visual Studio Code i Xampp.
    </p>
    <p>
        Oba programa imaju različite namjene. Visual Studio Code koristi se za pisanje koda i pravljenje fajlova (HTML-a, JavaScript-a, CSS-a, kao i PHP-a), 
        </p>
       <p>dok se Xampp koristi za povezivanje baze podataka sa edukativnom stranicom radi čuvanja podataka.</p>
   
    <p>
        Proces instaliranja programa je vrlo jednostavan. U nastavku su linkovi za preuzimanje Visual Studio Code-a i Xampp-a.
    </p>
    <br>
    <div class="slike">
    <div class="slika hidden">
        <img class="kompajleri" src="slike/vs.png">    
    </div>
    <div class="slika hidden">
        <img class ="kompajleri" src="slike/xampp.png">    
    </div>
    </div>

   <br>
   <br>

    <center><button class="vsx" onclick="">Preuzmi Visual Studio</button>
   <br>
   <br>

    <button class="vsx" onclick="">Preuzmi Xampp</button>
    <br>
    
</center>
</section>
<br>
<section class="hidden">
<p>
        Kada imate skinuta oba programa, možemo započeti sa samim programiranjem (tj. kodiranjem) edukativne stranice.
    </p>
</section>

<hr>
</section>
<section class="hidden">
    <h1>2. Pravljenje stranice</h1>
    <p>
        Započinjemo pravljenje edukativne stranice.
    </p>
    <p>
        Ja sam napravio edukativnu stranicu za programiranje (dakle osnove programskih jezika) kao primjer stranice.
    </p>
    <p>
        No, vi možete koristiti stvari navedene ovdje za svoju edukativnu stranicu i ne morate praviti edukativnu stranicu na istu temu.
    </p>
    <p>
        Za početak projekta pravimo naslovnu stranicu koja mora da sadrži 3 bitna dijela:
    </p>
    <h1>
        1. Header
</h1>
    <p>
        Header element je vrlo važan dio stranice koji nam služi kao navigacija kroz čitavu stranicu, sadrži logo i dugmad za otvaranje novih prozora.
    </p>
    <div class="headerslikadiv">
    <img class="headerslika" src="slike/header.png">
</div>
    <p>
        U ovom primjeru, header također sadrži ugnježdeni header, tj. pritiskom na dugme otvara nam se novi izbor dugmadi za detaljniju navigaciju kroz stranicu.
    </p>
    <br>
    <div class="headerslikadiv">
    <img class="headerslika" src="slike/header2.png">
</div>
    <br>
    <h1>
        2. Glavni sadržaj
    </h1>
    <p>
        Za glavni dio (tj. body) stranice imamo dosta stvari, neke čak i malo pretjerane, no sve služe svrsi.
    </p>
    <p>
        Ispod header-a imamo više section tag-ova, u njima imamo naznačeno koji section služi za koji dio stranice:
    </p>
    <img src="slike/section1.png" alt="Slika section-ova">
    <p>
        Ja sam napravio različite section-e za heading, HTML, CSS, JS, PHP i kompajlere.
    </p>
    <p>
        Vi možete drugačije nazvati svoje i koristiti ih za druge svrhe, ali cilj je sve uredno razdijeliti da se ne miješa CSS izgled ili JavaScript funkcionalnost.
    </p>
    <img src="slike/section2.png" alt="Slika section-ova">
    <p>
        Section tag-ovi u ovom slučaju sadrže tekst (u &lt;p&gt;,&lt;a&gt; i &lt;h1&gt; tag-ovima), kao i u &lt;svg&gt; tag za vizuelno lijep efekat.
    </p>
    
    <p>
        Osim samog teksta, napravljen je dio za primjere pored samog teksta u section elementima naznačen class imenom: section_desno.
    </p>
    <img src="slike/section3.png" alt="Slika section-ova">
    <p>
        U ovom primjeru koristio sam &lt;code&gt; tag u koji preko JavaScript-a se ubaci tekst.
    </p>
    <p>I jos za kraj sadržaja imamo dio za kompajlere koje korisnik može instalirati kako bi započeo programirati</p>
    <img src="slike/section4.png" alt="Slika section-ova">
    <h1>
        3. Footer
    </h1>
    <p>
        I na samom kraju stranice imamo footer koji je napravljen pomoću CSS-a i malo vanjske CSS biblioteke (za prikaz ikona).
    </p>
    <img src="slike/footer.png" alt="Slika footera">
    <p>
        Footer je podijeljen na 3 dijela: ikone, navigacija i donji dio, ali navigaciju nisam uvezao i ostavio sam da vi sami po potrebi povežete navigaciju iz footera kao za header.
    </p>
    <img src="slike/footer2.png" alt="Slika section-ova">
    <p>Detaljniji opis samog koda(html,js,css) možete pronaći u slijedećem videu:</p>
<video controls autoplay muted src="slike/home.mp4" width="700">
</section>
<br>
<hr>
<br>
<section class="hidden">
    <h1>3. Pravljenje teoretskog dijela</h1>
    <h1>
        1. Header
</h1>
    <p>
        Header je prekopiran sa naslovne stranice i do kraja projekta će se koristiti isti header.
    
    </p>
    <img src="slike/headerslika.png" alt="Slika headera">
    <h1>
        2. Glavni sadržaj
</h1>
    <p>
        Sadržaj teoretske stranice je puno jednostavniji nego sadržaj naslovne stranice.
    </p>
    <p>Ovaj put korišten je &lt;div&gt; tag u kojem se nalazi sav sadržaj označen class nazivom "glavni_sadrzaj".</p>
    <img src="slike/teorija1.png" alt="Slika glavnog sadržaja">
    <p>Na početku stranice nalazi se naslov za teoretsku "lekciju", kao i dugme ispod naslova koje pomoću JavaScript-a vodi na slijedeću stranicu za teoriju.</p>
    <p>U nastavku sav tekst nalazi se u &lt;p&gt; i &lt;h1&gt; tag-ovima koji je uređen pomoću CSS-a.</p>
    <img src="slike/teorija2.png" alt="Slika teksta">
    <p>Još jedna stvar iskorištena ponovno sa glavne stranice u ovom slučaju je primjer.</p>
    <p> Naglasit ću ponovno, ovo nije nešto neophodno što i vi morate imati na svojoj edukativnoj stranici. Ja sam jednostavno ponovno iskoristio kod sa malom izmjenom.</p>
    <img src="slike/teorija3.png" alt="Slika primjera">
    <p>Detaljniji opis samog koda (HTML, JS, CSS) možete pronaći u slijedećem videu:</p>
    <video controls autoplay muted src="slike/tutorial.mp4" width="700" alt="Video tutorijal">
    <h1>
        3. Footer 
</h1>
    <p>
        Footer je također ostavljen potpuno isti kao i sa prve stranice.
    </p>
</section>
<br>
<hr>
<br>
<section class="hidden">
  

<h2>4. Pravljenje baze kao i pravljenje login/registracija formi</h2>
<h1>1.Baza i PHP</h1>
<p>Bazu za stranicu(tačnije kviz) pravimo preko PHPMyAdmin-a</p>
<p>Ponovno ću napomenuti da se mogu koristiti alternative xampp-u i phpmyadmin-u za pravljenje baze no koraci za pravljenje će biti skoro isti.</p>
<img src="slike/baza1.png" alt="Slika primjera">
<p>Prvo pristupamo stranici preko web adrese: <a href="http://localhost/phpmyadmin/">http://localhost/phpmyadmin/</a>, no prije nego možete pristupiti adresi morate upaliti xampp i pokrenuti Apache i MySQL.</p>
<p>Koraci za pravljenje baze i tabele(u ovom slučaju za korisnika) su slijedeći:</p>
<p class="p2">-Klikom na dugme "new" otvara nam slijedeći prozor u koji upisujemo ime baze:<p>
<center><img src="slike/bazapr1.png" alt="Slika primjera">
<p class="p2">-Nakon kreiranja baze izbaci nam opciju za kreiranje tabele unutar baze:<p>
<img src="slike/bazapr2.png" alt="Slika primjera">
<p class="p2">-Klikom na dugme "create" otvara nam slijedeći prozor u koji upisujemo ime i tip atributa u tabeli:<p>
<img src="slike/bazapr3.png" alt="Slika primjera">
<p class="p2">-U ovom primjeru možete vidjeti kako sam ja kreirao svoju tabelu za edukativnu stranicu:<p>
<img src="slike/bazapr4.png" alt="Slika primjera">
<p class="p2">-I na kraju kada smo završili sa dodavanjem i upravljanjem podataka imamo bazu u kojoj se nalazi tabela sa primarnim ključem i atributima:<p>
<img src="slike/bazapr6.png" alt="Slika primjera">
<p class="p2">-Nakon kreiranja tabele klikom na insert ugme na vrhu stranice otvara nam slijedeći prozor:<p>
<img src="slike/bazapr5.png" alt="Slika primjera">
<p class="p2">-Klikom na dugme "new" otvara nam slijedeći prozor u koji upisujemo ime baze:<p>
</center>
<h1>2.Login i Registracija</h1>
<p>Nakon uspješno napravljene baze možemo započeti pravljenje login i registracije</p>
<p>HTML, CSS i JS je napravljen da (kod login) preko &lt;input&gt; tag-a unesemo podatke u bazu ili povlači podatke(kod registracije) i poredi ih sa onima iz baze.</p>
<video controls autoplay muted src="slike/vjezba.mp4" width="700" alt="vjezba.mp4">

</section>


<section class="hidden">
    <h2>5. Pravljenje kviza</h2>
    <h1>1. Izbornik i baza</h1>
    <p>Nakon što napravimo pravilan login i povežemo ga na bazu, preostaje nam pravljenje stranice za biranje kviza, samog kviza i rezultata.</p>
    <p>Prvo započinjemo sa stranicom za biranje kviza. Ona sadrži dosta sličnih elemenata kao i stranice prije nje, ali ima razliku </p>
    <p>Sada koristimo i bazu i korisnika za dinamičan tekst i izgled.</p>
    <p>Primjer ovoga je korištenje imena i prezimena iz tabele "korisnik" pomoću PHP koda:</p>
    <img src="slike/kviz1.png" alt="Slika primjera">
    <br>
    <img src="slike/kviz2.png" alt="Slika primjera">
    <p>Samim tim je važno ubaciti kod za provjeru da li je korisnik prijavljen na stranicu, čime bi stranice za kviz pravilno radile.</p>
    <p>Ispod teksta imamo izbor kviza pomoću button-a.</p>
    <img src="slike/kviz3.png" alt="Slika primjera">
    <p>Što nas klikom vodi na novu stranicu za kviz.</p>

    <h1>2. Kviz i baza</h1>
    <p>Kviz je spojen sa bazom preko tabela "odgovor" i "pitanja".</p>
    <img src="slike/kviz4.png" alt="Slika primjera">
    <p>Obe tabele sadrže id pitanja (pid) i id odgovora (oid), ali sa različitim primarnim ključem za uspješno vezanje baze sa stranicom.</p>
    <p>Svaki kviz ima svoju jedinstvenu tabelu za pitanja i odgovore koji se kroz radni redoslijed sortiraju.</p>
    <p>Možda zvuči kao da bi nastao problem, jer ako je svako pitanje i odgovor na random mjestu, postoji mogućnost miješanja odgovora sa pitanjima za koja nisu namijenjena.</p>
    <p>Tu mogućnost nam otklanjaju primarni ključevi (pid i oid) kroz sami kod.</p>
    <p>Dakle, kviz predstavljen na ovoj edukativnoj stranici koristi metod povlačenja podataka iz baze i na kraju, pritiskom na dugme "provjera rezultata", vodi korisnika na rezultate.</p>
    <img src="slike/kviz5.png" alt="Slika primjera">

    <p>3. Rezultat</p>
    <p>Za rezultat ima dosta stvari objasniti, no to je sve detaljno objašnjeno u videu. Ovdje ću također samo dotaknuti važne dijelove.</p>
    <img src="slike/rezultat1.png" alt="Slika primjera">
    <p>"result.php" sadrži ispis rezultata, od vrha do dna ispiše korisniku:</p>
    <p>Koliko je korisnik imao pokušanih pitanja.</p>
    <p>Koliko je korisnik imao tačno odgovorenih pitanja.</p>
    <p>Koliki je trenutni najbolji rezultat i ako je veći od prošlog, da ga zamijeni.</p>
    <p>Dugme za pokretanje kviza ponovno.</p>
</section>

<section class="hidden">
    <h1>Download</h1>
    <p>Ako želite skinuti edukativnu stranicu i njenu bazu kako bi mogli proći sami kroz kod i iskoristiti nešto što vas zanima sa stranice</p>
    <p>Pritisnite dugme:</p>
    <br>
    <center><button class="vsx" onclick="">Preuzmi Edukativnu Stranicu</button>
    <br>
    <br>
    <img src="slike/rezultat1.png" onclick="Download()" alt="Slika primjera">


</section>
<script>
functionDownload()
{
    window.location.href='https://github.com/Mirzak007/EdukativnaStranica.git'; 
}</script>

</body>
</html>