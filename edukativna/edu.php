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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header>
        <div class="header-lijevo">
            <a href="#">
            <div class="edu-logo">
                <img src="slike/logo.png">
            </div>
        </a>
        <div href="#Tutoriali" class="meni-btn" id="Tutoriali-btn">
            Tutoriali
            <i class=" fa-solid fa-caret-down"></i>
        </div>
        <div onclick="otvoriQuiz()" href="#Vjezbe" class="meni-btn" id="Vjezbe-btn">
            Vježbe
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
<section class="section_heading">
    <div class="section_kontejner">
        <h1>Nauči kodirati</h1>
        <p>Jedna od najvećih edukativnih stranica.</p>
        <a>Niste sigurni gdje započeti?</a>
    </div>
    <svg style="background-color: #D9EEE1;" width="100%" height="70" viewBox="0 0 100 100"
    preserveAspectRatio="none">
    <path id="wavepath" d="M0,0 L110,0C35,150 35,0 0,100z" fill="#282A35"></path>
</svg>
</section>

<section class="section_html">
    <div class="section_lijevo">
        <h1>HTML</h1>
        <p>Programski jezik za pravljenje stranica</p>
        <a href="htmltutorial1.php" class="bg-green">Nauči HTML</a>
        <a href="quiz.php" class="bg-pink">Vježbaj HTML</a>
    </div>
    <div class="section_desno">
        <div class="editor_kontejner">
            <h1>HTML Primjer:</h1>
            <div class="editor" id="htmlkod">
                <code>
                  
                </code>
            </div>
            <button class="editor_btn">Pokušaj sam</button>     
        </div>
    </div>
</section>

<section class="section_css">
    <div class="section_lijevo">
        <h1>CSS</h1>
        <p>Programski jezik za mijenjaje izgleda stranica</p>
        <a href="csstutorial1.php" class="bg-green">Nauči CSS</a>

        <a href="quiz2.php" class="bg-pink">Vježbaj CSS</a>
    </div>
    <div class="section_desno">
        <div class="editor_kontejner">
            <h1>CSS Primjer:</h1>
            <div class="editor" id="csskod">
                <code>
                  
                </code>
            </div>
            <button class="editor_btn">Pokušaj sam</button>     
        </div>
    </div>
</section>

<section class="section_js">
    <div class="section_lijevo">
        <h1 class="jsh1">JS</h1>
        <p class="jsp">Programski jezik za funcionalnost stranica</p>
        <a href="jstutorial1.php" class="bg-green">Nauči JS</a>

        <a  href="quiz3.php"  class="bg-pink">Vježbaj JS</a>
    </div>
    <div class="section_desno">
        <div class="editor_kontejner">
            <h1>JS Primjer:</h1>
            <div class="editor" id="jskod">
                <code>
                  
                </code>
            </div>
            <button class="editor_btn">Pokušaj sam</button>     
        </div>
    </div>
</section>

<section class="section_sql">
    <div class="section_lijevo">
        <h1 class="h1">SQL</h1>
        <p class="p">Programski jezik za pristup bazama podataka</p>
        <a href="mysqltutorial1.php" class="bg-green">Nauči SQL</a>

        <a href="quiz4.php" class="bg-pink">Vježbaj SQL</a>
    </div>
    <div class="section_desno">
        <div class="editor_kontejner">
            <h1>SQL Primjer:</h1>
            <div class="editor" id="sqlkod">
                <code>
                  
                </code>
            </div>
            <button class="editor_btn">Pokušaj sam</button>     
        </div>
    </div>
</section>

<div class="kompajler">
    <h1 class="h1k">Kompajleri</h1>
    <p class="pk">Primjeri kompajler koje možete skinuti besplatno i koristiti uz naše vježbe</p>
    <div class="kompajler_kontejner">
       <div class="kompajler_kontejner_vrh">
        <div class="kompajler_dio_lijevo">
            <div class="kompajler_tacka">
                <img src="slike/gifvs.gif"> 
            </div> 
        </div>
        <br>
        <br>
        <div class="kompajler_dio_desno">
            <button onclick="kompajleropen()" class=linkbutton>Skinite da započnete programirati</button>
        </div>
       </div>
    </div>
</div>

<div class="kompajler">
    <div class="kompajler_kontejner">
       <div class="kompajler_kontejner_vrh">
        <div class="kompajler_dio_lijevo">
            <div class="kompajler_tacka">
                <img src="slike/notepad.gif"> 
            </div> 
        </div>
        <br>
        <br>

        <div class="kompajler_dio_desno">
            <button onclick="kompajleropen2()" class=linkbutton>Skinite da započnete programirati</button>
        </div>
       </div>
    </div>
</div>

<div class="kompajler">
    <div class="kompajler_kontejner">
       <div class="kompajler_kontejner_vrh">
        <div class="kompajler_dio_lijevo">
            <div class="kompajler_tacka">
                <img src="slike/compiler.gif"> 
            </div> 
        </div>
        <br>
        <br>
        <div class="kompajler_dio_desno">
            <button onclick="kompajleropen3()" class=linkbutton>Započnite programirati bez skidanja</button>
        </div>
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

    <script src="js/edu.js"></script>
    <script> function otvoriQuiz() {
  window.location.href = 'dashboard.php';
}
function kompajleropen(){
    window.location.href='https://code.visualstudio.com/download'; 
}
function kompajleropen2(){
    window.location.href='https://notepad-plus-plus.org/downloads'; 
}
function kompajleropen3(){
    window.location.href='https://www.mycompiler.io/'; 
}
</script>
</body>
</html>