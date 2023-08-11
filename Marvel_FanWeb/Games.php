

<?php

require('db.php');
include("auth_session.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Marvel Games | Super Hero Games | Video, Online, & Mobile | Marvel
    </title>
    <link rel="icon" type="image/x-icon" href="marvel.ico" />
    <style>
      *{
        font-family: 'Poppins', sans-serif;
      }
      body {
        margin: 0;
      }
      header {
        width: 100%;
        height: 100px;
        background-color: black;
      }

      .middlediv {
        width: 70%;
        background-color: white;
        display: flex;
        position: relative;
        margin-left: 13%;
        margin-top: -50px;
        padding: 40px;
      }

      .B {
        margin-right: 20px;
      }

      .C {
        margin-top: 7px;
        margin-bottom: 0px;
        font-style: normal;
        font-variant-ligatures: normal;
        font-variant-caps: normal;
        font-variant-numeric: normal;
        font-variant-east-asian: normal;
        font-weight: 700;
        font-stretch: normal;
        font-size: 14px;
        line-height: 1.2;
        font-family: "Roboto Bold", "Trebuchet MS", Helvetica, Arial, sans-serif;
        transition: color 0.3s;
        color: black;
      }
      .C:hover {
        color: red;
      }

      .D {
        margin-top: 0px;
        margin-bottom: 0px;
        font-style: normal;
        font-variant-ligatures: normal;
        font-variant-caps: normal;
        font-variant-numeric: normal;
        font-variant-east-asian: normal;
        font-weight: 400;
        font-stretch: normal;
        font-size: 12px;
        line-height: 1;
        font-family: "RobotoCondensed Bold", "Trebuchet MS", Helvetica, Arial,
          sans-serif;
      }
      .top {
        position: absolute;
        top: -4rem;
        left: 30rem;
        width: 30.5%;
        height: 400px;
      }
      .text {
        position: absolute;
        display: inline-block;
        width: 20rem;
        top: 20rem;
        left: 8.5rem;
        height: 2rem;
        font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
          "Lucida Sans", Arial, sans-serif;
        font-size: 2.5rem;
        text-transform: uppercase;
        text-align: center;
        color: white;
        font-weight: 700;
        opacity: 1;
      }

      .E {
        margin: 50px;
        margin-left: 0;
        width: 100%;
        height: 110px;
      }

      .F {
        color: white;
        background-color: red;

        position: absolute;
        top: 1200px;
        left: 200px;
        padding: 10px;
        border: 1px solid red;
        border-radius: 50px;
      }

      .F :hover {
        padding: 20px;
        cursor: pointer;
        transition: 1s;
      }

      .G {
        color: white;
        position: absolute;
        top: 1150px;
        left: 100px;
      }

      .H {
        color: white;
        position: absolute;
        top: 1100px;
        left: 100px;
      }
      .I {
        position: absolute;

        left: 150px;
        background-color: white;
      }
      .box {
        width: 100%;
        height: 500px;
        display: flex;
        justify-content: center;
      }
      .img1 {
        width: 100%;
        height: 400px;
        background: url("Header.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
    top: 50px;

      }
      .wow img {
      position: relative;
      width:50px;
      height: 50px;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1005;
    }

    header .logo {
      position: absolute;
      width: 50px;
      height: 50px;
      top: -30px;
      left: 260px;
    }

    header ul {
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      top: 2vh;
      right: 2vh;
    }

    header ul li {
      list-style: none;
    }

    header ul li a {
      text-decoration: none;
      padding: 0.375rem 0.9375rem;
      color: white;
      transition: font-size 0.5s;
    }

    header ul li a:hover {
      color: rgb(251, 0, 0);
      font-size: 1.125rem;
    }



    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 1rem;
      border: none;
      outline: none;
      color: white;
      padding: 0.875rem 1rem;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
      text-transform: uppercase;
      transition: font-size 0.5s;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
      color: red;
      font-size: 1.125rem;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: black;
      width: 15.625rem;
      box-shadow: 0rem 0.5rem 1rem 0rem rgba(0, 0, 0, 0.2);
      z-index: 1;
      right: 0.1rem;
    }

    .dropdown-content a {
      float: none;
      color: rgb(255, 255, 255);
      padding: 0.75rem 1rem;
      text-decoration: none;
      display: block;
      text-align: left;
      transition: font-size 0.5s;
      text-transform: uppercase;
    }

    .dropdown-content a:hover {
      color: red;
      font-size: 1.125rem;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .cursor {
      position: fixed;
      border-radius: 50%;
      transform: translateX(-50%) translateY(-50%);
      pointer-events: none;
      left: -100px;
      top: 50%;
      mix-blend-mode: difference;
      background-color: rgb(255, 255, 255);
      z-index: 10000;
      border: 2px solid rgb(255, 255, 255);
      height: 30px;
      width: 30px;
      transition: all 300ms ease-out;
    }

    .span {
      color: white;
      transition: font-size 0.5s;
    }

    .span:hover {
      font-size: 1.125rem;
    }

    .user {
      position: relative;
      top: 0;
    }
    .down{
      float: left;
      overflow: hidden;
      width: 300px;
      height: 250px;
    }

    .drop-content {
      display:none;
      position: absolute;
      background-color: black;
      width: 20rem;
      box-shadow: 0rem 0.5rem 1rem 0rem rgba(0, 0, 0, 0.2);
      left:20px;
      margin-top: 25px;
      top: 70px;
    }

    .drop-content a {
      float: none;
      color: rgb(255, 255, 255);
      padding: 0.75rem 1rem;
      text-decoration: none;
      display: block;
      text-align: left;
      transition: font-size 0.5s;
      text-transform: uppercase;

    }

    .drop-content a:hover {
      color: red;
      font-size: 1.125rem;
    }
    .drop{
      position: absolute;
      top: 20px;    
      left: 18px;
      font-size:1.5rem;
      border: none;
      outline: none;
      color: white;
      padding: 0.875rem 1rem;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
      text-transform: uppercase;
      transition: font-size 0.5s;
    }
    .drop b{
      color: gray;
      font-weight: 800;
    }
    .drop b:hover{
      cursor: pointer;
    }
    .down:hover .drop-content {
      display: block;
    }
    @media (max-width: 600px) {
    .middlediv{
      white-space: nowrap;
      overflow-x: auto;
      width: 100%;
      border-bottom: 5px solid;
      padding: 0px;
      margin: 5px;
    }
    .top .text{
      display: none;
    }
    .E{
      white-space: nowrap;
    overflow-x: auto;
    }
    .down{
      
    }
    .B{
        margin-left: 5px;
    }
    .e{
        margin-left: 5px;

    }
    .h{
        margin-left: 5px;

    }

    header ul li a {
        margin-left: 5px;
    }
    hr{
      display: none;
    }
    .f{
      color:red;
    }
    .spot{
      color: red;
    }
    header .logo {
      position: absolute;
      top: -1.3vh;
      left: 10vh;
  }
  .drop {
    position: relative;
    top: 10vh;
    left: 8vh;
    z-index: 1;
    font-size: 1rem;
  }

  .wow img{
    box-shadow: 0px 0px 0px rgb(31, 30, 30);  }    
  header ul{
    top: 15vh;
    z-index: 1;
    width: 100%;
    white-space: nowrap;
    overflow-x: auto;
    justify-content: start;
  }
  #myHeader{
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .drop-content {
    display: none;
    position: relative;
    background: white;
    width: 20rem;
    z-index: 10;
    box-shadow: 0rem 0.5rem 1rem 0rem rgba(0, 0, 0, 0.2);
    left: 10vh;
    margin-top: 0;
  }
.drop-content a {
  color: black;
}
.a{
    display: none;
}
.b{
    display: none;
}
.top{
  display: none;
}

}
    </style>
  </head>
  <body>
  <header id="myHeader">
      <div class="down">
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
    <div class="box">
      <div class="img1"></div>
    </div>

    <div class="top">
      <div class="text">GAMES</div>
    </div>
    <br />

    <div class="middlediv">
      <div class="B">
        <img src="midnightsons.jpg" width="160px" height="236px" />
        <a href="https://www.marvel.com/games/marvels-midnight-suns" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Midnight Sons</h3></a>
        <h3 class="D">2022</h3>
      </div>
      <div class="B">
        <img src="marvelsnap.png" width="160px" height="236px" />
        <a href="https://www.marvel.com/games/marvel-snap" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">MARVEL SNAP</h3></a>
        <h3 class="D">2022</h3>
      </div>
      <div class="B">
        <img
          src="marvelsguardiansofthegalaxy.jpg"
          width="160px"
          height="236px"
        />
        <a href="https://www.marvel.com/games/marvels-guardians-of-the-galaxy" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Guardians of the Galaxy</h3></a>
        <h3 class="D">2021</h3>
      </div>
      <div class="B">
        <img src="futurerevolution.jpg" width="160px" height="236px" />
        <a href="https://www.marvel.com/games/marvel-future-revolution" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">MARVEL Future Revolution</h3></a>
        <h3 class="D">2021</h3>
      </div>
      <div class="B">
        <img src="msmmm.jpg" width="160px" height="236px" />
        <a href="https://www.marvel.com/games/marvel-s-spider-man-miles-morales" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Spider-Man: Miles Morales</h3></a>
        <h3 class="D">2020</h3>
      </div>
      <div class="B">
        <img src="marvelcontestofchapions.jpg" width="160px" height="236px" />
        <a href="https://www.marvel.com/games/marvel-contest-of-champions" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel Contest of Champions</h3></a>
        <h3 class="D">2020</h3>
      </div>
    </div>
    <div class="E">
      <center>
        <a
          href="https://www.marvel.com/unlimited?cid=dsp_housead_20210909_unlimited_launchads"
          target="_blank"
          ><img src="13295404199721664793.jpg"
        /></a>
      </center>
    </div>
    <pre></pre>
    <div class="middlediv">
      <h2>ALL GAMES</h2>
    </div>
    <br /><br />
    <div class="middlediv">
      <div class="B">
        <img src="bacon.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Wolverine</h3></a>
      </div>
      <div class="B">
        <img src="popsicle.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Spider Man 2</h3></a>
        <h3 class="D">2023</h3>
      </div>
      <div class="B">
        <img src="midnightsons.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Midnight Sons</h3></a>
        <h3 class="D">2022</h3>
      </div>
      <div class="B">
        <img src="marvelsnap.png" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">MARVEL SNAP</h3></a>
        <h3 class="D">2022</h3>
      </div>
      <div class="B">
        <img
          src="marvelsguardiansofthegalaxy.jpg"
          width="160px"
          height="236px"
        />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Guardians of the Galaxy</h3></a>
        <h3 class="D">2021</h3>
      </div>
      <div class="B">
        <img src="futurerevolution.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">MARVEL Future Revolution</h3></a>
        <h3 class="D">2021</h3>
      </div>
    </div>
    <br /><br /><br />
    <div class="middlediv">
      <div class="B">
        <img src="donut.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">FORTNITE</h3></a>
        <h3 class="D">2020</h3>
      </div>
      <div class="B">
        <img src="msmmm.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Spider-Man: Miles Morales</h3></a>
        <h3 class="D">2020</h3>
      </div>
      <div class="B">
        <img src="marvelsavengers.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Avengers</h3></a>
        <h3 class="D">2020</h3>
      </div>
      <div class="B">
        <img src="marvelsironmanvr.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Iron Man VR</h3></a>
        <h3 class="D">2020</h3>
      </div>
      <div class="B">
        <img
          src="legomarvelcollectionbundle.jpg"
          width="160px"
          height="236px"
        />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Lego Marvel Collection Bundle</h3></a>
        <h3 class="D">2019</h3>
      </div>
      <div class="B">
        <img src="marvelultimatealliance3.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel Ultimate Alliance 3: The Black Order</h3></a>
        <h3 class="D">2019</h3>
      </div>
    </div>
    <br /><br /><br />
    <div class="middlediv">
      <div class="B">
        <img src="marvelsspider-man.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel's Spider-Man</h3></a>
        <h3 class="D">2018</h3>
      </div>
      <div class="B">
        <img src="marvelpowersunitedvr.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">MARVEL Powers United VR</h3></a>
        <h3 class="D">2018</h3>
      </div>
      <div class="B">
        <img src="marvelcontestofchapions.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel Contest of Champions</h3></a>
      </div>
      <div class="B">
        <img src="marvelfuturefight.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel Future Fight</h3></a>
      </div>
      <div class="B">
        <img src="marvelstrikeforce.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel Strike Force</h3></a>
      </div>
      <div class="B">
        <img src="marvelpuzzlequest.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">MARVEL Puzzle Quest</h3></a>
      </div>
    </div>
    <br /><br /><br />
    <div class="middlediv">
      <div class="B">
        <img src="marvelvscapcominfinite.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel vs. Capcom: Infinite</h3></a>
      </div>
      <div class="B">
        <img
          src="marvelsguardiansofthegalaxythetelltaleseries.jpg"
          width="160px"
          height="236px"
        />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C"> Guardians of the Galaxy: <br> The Telltale Series</h3></a>
      </div>
      <div class="B">
        <img src="marvelpinball.jpg" width="160px" height="236px" />
        <a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;"><h3 class="C">Marvel Pinball</h3></a>
      </div>
    </div>
  </body>
</html>
