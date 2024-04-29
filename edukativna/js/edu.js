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

 /*************/
 const Htmlkod=`
 <!DOCTYPE html>
 <html>
 <head>
 <title>HTML Tutorial</title>
 </head>
 <body>
 
 <h1>This is a heading</h1>
 <p>This is a paragraph.</p>
 
 </body>
 </html>
 `
 const Csskod=`
 body {
    background-color: lightblue;
  }
  
  h1 {
    color: white;
    text-align: center;
  }
  
  p {
    font-family: verdana;
  }
 `
 const Jskod=`
 <button onclick="myFunction()">Pritisni Me!</button>

 <script>
 function kvadrat() {
   let x = document.getElementById("varijabla");
   return pow(x,2);
 }
 document.getElementById("rez").innerText=kvadrat();
 </script>
 `
 const Sqlkod=`
 SELECT * FROM mušterije
 WHERE datum_rođenja between '1990' and '2005';
 `
 let htmlkod=document.getElementById("htmlkod").innerText=Htmlkod;
 let csskod=document.getElementById("csskod").innerText=Csskod;
 let jskod=document.getElementById("jskod").innerText=Jskod;
 let sqlkod=document.getElementById("sqlkod").innerText=Sqlkod;


