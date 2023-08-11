<?php

require('db.php');
include("auth_session.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Finlandica&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Finlandica&family=Oswald:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="icon" href="favicon.png" type="image/png" sizes="76x76" />
</head>
<script>
  function weblink(num)
  {
    var addre = ["https://www.marvel.com/characters/iron-man-tony-stark","https://www.marvel.com/characters/captain-america-steve-rogers","https://www.marvel.com/characters/thor-thor-odinson","https://www.marvel.com/characters/doctor-strange-stephen-strange","https://www.marvel.com/characters/scarlet-witch-wanda-maximoff","https://www.marvel.com/characters/spider-man-peter-parker","https://www.marvel.com/articles/comics/what-if-stories-that-came-true-in-the-comics","https://www.marvel.com/articles/comics/first-appearances-moon-knight","https://www.marvel.com/articles/comics/peggy-carter-wields-the-shield-in-new-captain-carter-1-trailer","https://www.marvel.com/watch/trailers-and-extras/who-is-america-chavez","https://www.marvel.com/characters/moon-knight-marc-spector","https://www.marvel.com/characters/miss-america-america-chavez","https://www.marvel.com/characters/jane-foster","https://www.marvel.com/characters/ms-marvel-kamala-khan","https://www.marvel.com/characters/khonshu","https://www.marvel.com/characters/morbius","https://www.marvel.com/characters/black-panther-t-challa","https://www.marvel.com/characters/black-widow-natasha-romanoff","https://www.marvel.com/characters/hulk-bruce-banner","https://www.marvel.com/characters/gamora","https://www.marvel.com/characters/groot","https://www.marvel.com/characters/loki","https://www.marvel.com/characters/sam-wilson","https://www.marvel.com/characters/star-lord-peter-quill","https://www.marvel.com/characters/thanos","https://www.marvel.com/characters/vision","https://www.marvel.com/characters/winter-soldier-bucky-barnes","https://www.marvel.com/characters/hawkeye-clint-barton","https://www.marvel.com/characters/shang-chi","https://www.marvel.com/characters/ant-man-scott-lang","https://www.marvel.com/characters/black-widow-yelena","https://www.marvel.com/characters/red-guardian-alexei-shostakov","https://www.marvel.com/characters/hawkeye-kate-bishop","https://www.marvel.com/characters/captain-marvel-carol-danvers"];
    location.replace(addre[num]);
  }
</script>
<body>
<header id="myHeader">
      <div class="down">
      <a href="http://localhost/php/homepage.php" target="_blank" class="logo"><img class="wow" src="marvel-logo.png" /></a>
        <button class="drop"><b><?php echo $_SESSION['username']; ?></b>
        </button>
        <div class="drop-content">
          <a href="https://help.marvel.com/">HELP/FAQS</a>
          <a href="#">Account Setting </a>
          <a href="http://localhost/php/logout.php">Logout</a>
        </div>
      </div>
      <ul>
        <li><a href="http://localhost/php/characters.php">CHARACTERS</a></li>
        <li><a href="http://localhost/php/Marvel%20Comics.php">COMICS</a></li>
        <li><a href="http://localhost/php/movies.php" target="_blank">MOVIES</a></li>
        <li><a href="http://localhost/php/marvell.php">TV SHOWS</a></li>
        <li><a href="http://localhost/php/music.php">MUSIC</a></li>
        <li><a href="http://localhost/php/Games.php">GAMES</a></li>
        <li><a href="http://localhost/php/MARVEL%20NEWS.php">NEWS</a></li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">More
            </button>
            <div class="dropdown-content">
              <a href="https://www.marvel.com/culture-lifestyle">Culture & Lifestyle</a>
              <a href="https://www.marvel.com/podcasts">Podcast</a>
              <a href="https://www.shopdisney.com/marvel-content/?CMP=SYN-MARVELCOM:NAV_MORE">Shop</a>
            </div>
          </div>
        </li>
    </header>
    <div>
        <div class="img1"></div>
        
    </div>
    <h1 class="a">MARVEL CHARACTERS</h1>
    
    <p class="b">Get hooked on a hearty helping of heroes and villains from the humble House of Ideas!</p>
    <div class="middlediv">
      <h2 class="spot">FEATURED CHARACTERS</h2> 
    </div>
    
    <div class="grid1">
      <div class="B">
       <img src="ironman.jpg" width="168px" height="210px" class="solo" onclick="weblink(0)"/>
        <h3 class="C"><a href="https://www.marvel.com/characters/iron-man-tony-stark" target="_blank">IRON MAN</a></h3>
        <h3 class="D">TONY STARK</h3>
      </div>
      <div class="B">
        <img src="cap.jpg" width="168px" height="210px" onclick="weblink(1)"/>
        <h3 class="C"><a href="https://www.marvel.com/characters/captain-america-steve-rogers" target="_blank">CAPTAIN AMERICA</a></h3>
        <h3 class="D">STEVE ROGERS</h3>
      </div>
      <div class="B">
        <img src="THOR.jpg" width="168px" height="210px" onclick="weblink(2)"/></a>
        <h3 class="C"><a href="https://www.marvel.com/characters/thor-thor-odinson" target="_blank">THOR ODINSON</a></h3>
        <h3 class="D"></h3>
      </div>
      <div class="B">
        <img src="drstrange.jpg" width="168px" height="210px" onclick="weblink(3)"/></a>
        <h3 class="C"><a href="https://www.marvel.com/characters/doctor-strange-stephen-strange" target="_blank">DOCTOR STRANGE</a></h3>
        <h3 class="D">DR. STEPHEN STRANGE</h3>
      </div>
      <div class="B">
        <img src="wanda.jpg" width="168px" height="210px" onclick="weblink(4)"/></a>
        <h3 class="C"><a href="https://www.marvel.com/characters/scarlet-witch-wanda-maximoff" target="_blank">WANDA MAXIMOFF</a></h3>
        <h3 class="D">SCARLET WITCH</h3>
      </div>
      <div class="B">
        <img src="spidey.jpg" width="168px" height="210px" onclick="weblink(5)"/></a>
        <h3 class="C"> <a href="https://www.marvel.com/characters/spider-man-peter-parker" target="_blank">SPIDER-MAN</a></h3>
        <h3 class="D">PETER PARKER</h3>
      </div>
      <hr>
    </div>
    <br>
    <div class="mid2">
      <h2 class="spot">CHARACTER SPOTLIGHT</h2>
    </div>
    <div class="grid2">
      <div class="e">
        <img class="image" src="c1.jpg" width="280px" height="165px" onclick="weblink(6)"/>
        <p class="f">COMICS</p>
        <p class="g">When 'What If?' Comes True</p>
      </div>
      <div class="e">
        <img class="image" src="c2.jpg" width="280px" height="165px" onclick="weblink(7)">
        <p class="f">COMICS</p>
        <p class="g">First Appearances: Moon Knight</p>   
      </div>
      <div class="e">
        <img class="image" src="c3.jpg" width="280px" height="165px" onclick="weblink(8)">
        <p class="f">COMICS</p>
        <p class="g">Peggy Carter Weilds The Sheild In New <br>'Captain Carter #1' Trailer</p>
      </div>
      <div class="e">
        <img class="image" src="c4.jpg" width="280px" height="165px" onclick="weblink(9)">
        <p class="f">TRAILERS & EXTRAS</p>
        <p class="g">Who Is America Chavez!?</p>
      </div>
      <hr>
    </div>

    <div class="grid3">
      <div class="h">
        <img src="moonknight.jpg" width="168px" height="210px" onclick="weblink(10)"/>
        <h3 class="C"><a href="https://www.marvel.com/characters/moon-knight-marc-spector" target="_blank">MOON KNIGHT</a></h3>
        <h3 class="D">MARC SPECTOR</h3>
      </div>
      <div class="h">
        <img src="chavez.jpg" width="168px" height="210px" onclick="weblink(11)"/>
        <h3 class="C"><a href="https://www.marvel.com/characters/miss-america-america-chavez" target="_blank">AMERICA</a></h3>
        <h3 class="D">AMERICA CHAVEZ</h3>
      </div>
      <div class="h">
        <img src="jane.jpg" width="168px" height="210px" onclick="weblink(12)"/>
        <h3 class="C"><a href="https://www.marvel.com/characters/jane-foster" target="_blank">MIGHTY THOR</h3>
        <h3 class="D">JANE FOSTER</a></h3>
      </div>
      <div class="h">
        <img src="msmarvel.jpg" width="168px" height="210px" onclick="weblink(13)"/>
        <h3 class="C"><a href="https://www.marvel.com/characters/ms-marvel-kamala-khan" target="_blank">MS. MARVEL</a></h3>
        <h3 class="D">KAMALA KHAN</h3>
      </div>
      <div class="h">
        <img src="khonshu.jpg" width="168px" height="210px" onclick="weblink(14)"/>
        <h3 class="C">KHONSHU</h3>
        <h3 class="D">CHONS</h3>
      </div>
      <div class="h">
        <img src="morbius.jpg" width="168px" height="210px" onclick="weblink(15)"/>
        <h3 class="C">MORBIUS</h3>
        <h3 class="D">DR. MICHAEL MORBIUS</h3>
      </div>
      <hr>
    </div>
    <br>
    <div class="mid2">
      <h2 class="spot">MARVEL CHARACTERS LIST</h2>
    </div>

    <div class="grid4">
      <div class="h">
        <img src="bpanther.jpg" width="168px" height="210px" onclick="weblink(16)"/>
        <h3 class="C">BLACK PANTHER</h3>
        <h3 class="D">T'CHALLA</h3>
      </div>
      <div class="h">
        <img src="blackwidow.jpg" width="168px" height="210px" onclick="weblink(17)"/>
        <h3 class="C">BLACK WIDOW</h3>
        <h3 class="D">NATASHA ROMANOFF</h3>
      </div>
      <div class="h">
        <img src="hulk.jpg" width="168px" height="210px" onclick="weblink(18)"/>
        <h3 class="C">HULK</h3>
        <h3 class="D">BRUCE BANNER</h3>
      </div>
      <div class="h">
        <img src="gamora.jpg" width="168px" height="210px" onclick="weblink(19)"/>
        <h3 class="C">GAMORA</h3>
        <h3 class="D"></h3>
      </div>
      <div class="h">
        <img src="groot.jpg" width="168px" height="210px" onclick="weblink(20)"/>
        <h3 class="C">GROOT</h3>
        <h3 class="D"></h3>
      </div>
      <div class="h">
        <img src="loki.jpg" width="168px" height="210px" onclick="weblink(21)"/>
        <h3 class="C">LOKI</h3>
        <h3 class="D"></h3>
      </div>
    </div>

    <div class="grid4">
      <div class="h">
        <img src="falcon.jpg" width="168px" height="210px" onclick="weblink(22)"/>
        <h3 class="C">FALCON</h3>
        <h3 class="D">SAM WILSON</h3>
      </div>
      <div class="h">
        <img src="STARLORD.jpg" width="168px" height="210px" onclick="weblink(23)"/>
        <h3 class="C">STAR-LORD</h3>
        <h3 class="D">PETER QUILL</h3>
      </div>
      <div class="h">
        <img src="thanos.jpg" width="168px" height="210px" onclick="weblink(24)"/>
        <h3 class="C">THANOS</h3>
        <h3 class="D"></h3>
      </div>
      <div class="h">
        <img src="vision.jpg" width="168px" height="210px" onclick="weblink(25)"/>
        <h3 class="C">VISION</h3>
        <h3 class="D"></h3>
      </div>
      <div class="h">
        <img src="bucky.jpg" width="168px" height="210px" onclick="weblink(26)"/>
        <h3 class="C">WINTER SOLDIER</h3>
        <h3 class="D">BUCKY BARNES</h3>
      </div>
      <div class="h">
        <img src="hawkeye.jpg" width="168px" height="210px" onclick="weblink(27)"/>
        <h3 class="C">HAWKEYE</h3>
        <h3 class="D">CLINT BARTON</h3>
      </div>
    </div>

    <div class="grid4">
      <div class="h">
        <img src="shangchi.jpg" width="168px" height="210px" onclick="weblink(28)"/>
        <h3 class="C">SHANG-CHI</h3>
        <h3 class="D"></h3>
      </div>
      <div class="h">
        <img src="ANT-MAN.jpg" width="168px" height="210px" onclick="weblink(29)"/>
        <h3 class="C">ANT-MAN</h3>
        <h3 class="D">SCOTT-LANG</h3>
      </div>
      <div class="h">
        <img src="YELENA.jpg" width="168px" height="210px" onclick="weblink(30)"/>
        <h3 class="C">YELENA</h3>
        <h3 class="D"></h3>
      </div>
      <div class="h">
        <img src="redgauard.jpg" width="168px" height="210px" onclick="weblink(31)"/>
        <h3 class="C">RED GUARDIAN</h3>
        <h3 class="D"></h3>
      </div>
      <div class="h">
        <img src="kate.jpg" width="168px" height="210px" onclick="weblink(32)"/>
        <h3 class="C">KATE BISHOP</h3>
        <h3 class="D"></h3>
      </div>
      <div class="h">
        <img src="CAPmarvel.jpg" width="168px" height="210px" onclick="weblink(33)"/>
        <h3 class="C">CAPTAIN MARVEL</h3>
        <h3 class="D">CAROL DENVERS</h3>
      </div>
    </div>
    <br>
    <hr>
    <br>
    <br>
    <div class='cursor' id="cursor"></div>
  <script>

if (window.screen.width >= 700) {

  var cursor = document.getElementById("cursor");
  document.body.addEventListener("mousemove", function(e) {
    cursor.style.left = e.clientX + "px",
      cursor.style.top = e.clientY + "px";
  });
}

  </script>
</body>
</html>