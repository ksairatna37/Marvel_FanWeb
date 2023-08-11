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
  <title>Marvel Movies</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Roboto&family=Stick+No+Bills:wght@800&display=swap" rel="stylesheet">
  <link rel="icon" href="favicon.png" type="image/png" sizes="76x76" />

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      color: #fff;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;

    }

    body {
      margin: 0;
      background-color: rgb(0, 0, 0);
    }

    img {
      width: 7.5rem;
      height: 7.5rem;
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
      top: -1.3vh;
      left: 30vh;

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
      padding: 0.375rem 1.5rem;
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
      background: transparent;
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

    .name {
      position: absolute;
      width: 50%;
      height: 83%;
      top: 7.7rem;
      left: 48%;
      padding-bottom: 50px;
    }

    .title {
      position: relative;
      width: 25%;
      height: 50%;
      top: 7.7rem;
      left: 10%;
      color: white;
      font-family: 'Stick No Bills', sans-serif;
      font-weight: 700;
      font-size: 100px;
      text-align: center;
      padding: 10px;
    }

    span {
      padding-right: 20px;
      font-weight: 400;
    }

    .name ul li {
      font-family: Roboto;
      list-style: none;

    }

    .name ul li a {
      line-height: 50px;
      text-decoration: none;
      text-transform: uppercase;
      color: rgb(255, 255, 255);
      padding-left: 50px;
      opacity: 0.7;
      transition: font-size .2s;
      z-index: 10005;
      font-weight: 400;
    }

    .name ul li a:hover {
      font-size: 18px;
      color: rgb(255, 255, 255);
      opacity: 1;
    }

    .container {
      position: fixed;
      width: 100%;
      height: 100rem;
    }

    .cursor {
      position: fixed;
      border-radius: 50%;
      transform: translateX(-50%) translateY(-50%);
      pointer-events: none;
      left: -100px;
      top: 50%;
      mix-blend-mode: difference;
      background-color: rgb(255, 0, 0);
      z-index: 10000;
      border: 2px solid rgb(255, 0, 0);
      height: 30px;
      width: 30px;
      transition: all 300ms ease-out;
    }

    .down {
      float: left;
      overflow: hidden;
      width: 300px;
      height: 130px;
    }

    .drop-content {
      display: none;
      position: relative;
      background: transparent;
      width: 20rem;
      box-shadow: 0rem 0.5rem 1rem 0rem rgba(0, 0, 0, 0.2);
      left: 20px;
      margin-top: 5 px;
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

    .drop {
      position: relative;
      top: 20px;
      left: 18px;
      font-size: 1.5rem;
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

    .drop b {
      color: gray;
      font-weight: 800;
    }

    .drop b:hover {
      cursor: pointer;
    }

    .down:hover .drop-content {
      display: block;
    }

    #ironman1 {
      position: fixed;
      object-fit: fill;
      height: 100%;
      width: 100%;
      opacity: 0;
      z-index: -500;
    }

    #Hulk {
      position: fixed;
      object-fit: fill;
      height: 100%;
      width: 100%;
      opacity: 0;
      z-index: -500;

    }

    #Ironman2 {
      position: fixed;
      object-fit: cover;
      margin-top: 30px;
      height: 100%;
      opacity: 0;
      width: 100%;
      z-index: -500;

    }

    #Thor {
      position: fixed;
      object-fit: cover;
      padding-top: 30px;
      height: 100%;
      opacity: 0;
      width: 100%;
      z-index: -500;

    }

    #FirstAvenger {
      position: fixed;
      object-fit: cover;
      margin-top: 30px;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;

    }

    #Avengers {
      position: fixed;
      object-fit: fill;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
    }

    #ironman3 {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #captain2 {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #gaurdians {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #ultron {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #dr {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #gaurdians2 {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #homecoming {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #thor3 {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #thor2 {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #antman {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
    }

    #civil {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #infinitywar {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
    }

    #panther {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #antman2 {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
    }

    #marvel {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #endgame {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 30px;
    }

    #spiderman {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
    }

    #blackwidow {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 25px;
    }

    #shangchi {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 25px;
    }

    #eternals {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 25px;
    }

    #nowayhome {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
      margin-top: 25px;
    }

    #dr2 {
      position: fixed;
      object-fit: cover;
      opacity: 0;
      height: 100%;
      width: 100%;
      z-index: -500;
    }

    @media (max-width: 400px) {
      
      .title {
           position: absolute;
      width: 25%;
      left: 0;
        top: 7.7rem;
        color: white;
        font-family: 'Stick No Bills', sans-serif;
        font-weight: 700;
        font-size: 3em;
        text-align: center;
        padding: 10px;
      }
      
  
  .name ul li a {
    padding-left: 0;
  }
      }
  </style>
</head>

<body>

  <div class="main">
    <header id="myHeader">
      <div class="down">
        <button class="drop"><b><?php echo $_SESSION['username']; ?></b>
        </button>
        <div class="drop-content">
          <a href="http://localhost/php/logout.php">Logout</a>
        </div>
      </div>
      <a href="http://localhost/php/homepage.php" target="_blank" class="logo"><img src="marvel-logo.png" /></a>
      <ul>
        <li><a href="http://localhost/php/characters.php">CHARACTERS</a></li>
        <li><a href="http://localhost/php/Marvel%20Comics.php">COMICS</a></li>
        <li><a href="http://localhost/php/ironman.php" target="_self">
            <font style="color:red;">MOVIES</font>
          </a></li>
        <li><a href="http://localhost/php/marvell.php">TV SHOWS</a></li>
        <li><a href="http://localhost/php/music.php">MUSIC</a></li>
        <li><a href="http://localhost/php/Games.php">GAMES</a></li>
        <li><a href="http://localhost/php/MARVEL%20NEWS.php">NEWS</a></li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">More
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="https://www.marvel.com/culture-lifestyle">Culture & Lifestyle</a>
              <a href="https://www.marvel.com/podcasts">Podcast</a>
              <a href="https://www.shopdisney.com/marvel-content/?CMP=SYN-MARVELCOM:NAV_MORE">Shop</a>
            </div>
          </div>
        </li>
    </header>
    <div class="container">
      <div class="title">
        MARVEL MOVIES
      </div>
    </div>
    <div class="name">
      <ul>
        <li><a href="http://localhost/php/ironman1.php" onmouseenter="myFunction1()" onmouseleave="exit1()"><span>2008</span>Iron Man</a></li>
        <li><a href="http://localhost/php/hulk.php" onmouseenter="myFunction2()" onmouseleave="exit2()"><span>2008</span>The Incredible Hulk</a></li>
        <li><a href="http://localhost/php/ironman2.php" onmouseenter="myFunction3()" onmouseleave="exit3()"><span>2010</span>Iron Man 2</a></li>
        <li><a href="http://localhost/php/thor.php" onmouseenter="myFunction4()" onmouseleave="exit4()"><span>2011</span>Thor</a></li>
        <li><a href="http://localhost/php/captain1.php" onmouseenter="myFunction5()" onmouseleave="exit5()"><span>2011</span>Captain America: The First Avenger</a></li>
        <li><a href="http://localhost/php/avengers.php" onmouseenter="myFunction6()" onmouseleave="exit6()"><span>2012</span>The Avengers</a></li>
        <li><a href="http://localhost/php/ironman3.php" onmouseenter="myFunction7()" onmouseleave="exit7()"><span>2013</span>Iron Man 3</a></li>
        <li><a href="#" onmouseenter="myFunction8()" onmouseleave="exit8()"><span>2013</span>Thor: The Dark World</a></li>
        <li><a href="#" onmouseenter="myFunction9()" onmouseleave="exit9()"><span>2014</span>Captain America: The Winter Soldier</a></li>
        <li><a href="#" onmouseenter="myFunction10()" onmouseleave="exit10()"><span>2014</span>Gaurdians Of The Galaxy</a></li>
        <li><a href="#" onmouseenter="myFunction11()" onmouseleave="exit11()"><span>2015</span>Avengers: Age Of Ultron</a></li>
        <li><a href="#" onmouseenter="myFunction12()" onmouseleave="exit12()"><span>2015</span>Ant-Man</a></li>
        <li><a href="#" onmouseenter="myFunction13()" onmouseleave="exit13()"><span>2016</span>Captain America: Civil War</a></li>
        <li><a href="#" onmouseenter="myFunction14()" onmouseleave="exit14()"><span>2016</span>Doctor Strange</a></li>
        <li><a href="#" onmouseenter="myFunction15()" onmouseleave="exit15()"><span>2017</span>Gaurdians Of The Galaxy Vol. 2</a></li>
        <li><a href="#" onmouseenter="myFunction16()" onmouseleave="exit16()"><span>2017</span>Spider-Man: Homecoming</a></li>
        <li><a href="#" onmouseenter="myFunction17()" onmouseleave="exit17()"><span>2017</span>Thor Ragnarok</a></li>
        <li><a href="#" onmouseenter="myFunction18()" onmouseleave="exit18()"><span>2018</span>Black Panther</a></li>
        <li><a href="#" onmouseenter="myFunction19()" onmouseleave="exit19()"><span>2018</span>Avengers: Infinity War</a></li>
        <li><a href="#" onmouseenter="myFunction20()" onmouseleave="exit20()"><span>2018</span>Ant-Man and the Wasp</a></li>
        <li><a href="#" onmouseenter="myFunction21()" onmouseleave="exit21()"><span>2019</span>Captain Marvel</a></li>
        <li><a href="http://localhost/php/endgame.php" onmouseenter="myFunction22()" onmouseleave="exit22()"><span>2019</span>Avengers: Endgame</a></li>
        <li><a href="#" onmouseenter="myFunction23()" onmouseleave="exit23()"><span>2019</span>Spider-Man: Far From Home</a></li>
        <li><a href="#" onmouseenter="myFunction24()" onmouseleave="exit24()"><span>2021</span>Black Widow</a></li>
        <li><a href="#" onmouseenter="myFunction25()" onmouseleave="exit25()"><span>2021</span>Shang-Chi and The Legend of The Ten Rings </a></li>
        <li><a href="#" onmouseenter="myFunction26()" onmouseleave="exit26()"><span>2021</span>Eternals</a></li>
        <li><a href="#" onmouseenter="myFunction27()" onmouseleave="exit27()"><span>2021</span>Spider-Man: No Way Home</a></li>
        <li><a href="#" onmouseenter="myFunction28()" onmouseleave="exit28()"><span>2022</span>Doctor Strange in the Multiverse of Madness</a></li>
        <li><a href="#" onmouseenter="myFunction29()" onmouseleave="exit29()"><span>2022</span>Thor: Love And Thunder</a></li>
        <li><a href="#" onmouseenter="myFunction30()" onmouseleave="exit30()"><span>2022</span>Black Panther: Wakanda Forever</a></li>
        <li><a href="#" onmouseenter="myFunction31()" onmouseleave="exit31()"><span>2023</span>Ant-Man and the Wasp: Quantumania</a></li>
        <li><a href="#" onmouseenter="myFunction32()" onmouseleave="exit32()"><span>2023</span>The Marvels</a></li>
        <li><a href="#" onmouseenter="myFunction33()" onmouseleave="exit33()"><span>2024</span>Blade</a></li>
        <li><a href="#" onmouseenter="myFunction34()" onmouseleave="exit34()"><span>2024</span>Fantastic Four</a></li>

      </ul>
    </div>
    <div class='cursor' id="cursor"></div>



    <!-- <video autoplay muted loop id="ironman1">
      <source src="ironman1.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop  id="Hulk">
      <source src="hulk.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop  id="Ironman2">
      <source src="ironman2.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="Thor">
      <source src="thor.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop  id="FirstAvenger">
      <source src="first avenger.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="Avengers" />
    <source src="avengers.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="ironman3" />
    <source src="ironman3.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop  id="captain2" />
    <source src="captain2.mp4" type="video/mp4" />

    </video>
    </video>

    <video autoplay muted loop  id="thor2" />
    <source src="thor2.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop  id="gaurdians" />
    <source src="gaurdians.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="ultron" />
    <source src="ultron.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="dr" />
    <source src="dr.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="gaurdians2" />
    <source src="gaurdians2.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="homecoming" />
    <source src="homecoming.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="thor3" />
    <source src="thor3.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="antman" />
    <source src="antman.mp4" type="video/mp4" />

    </video>
    </video>
    <video autoplay muted loop id="civil" />
    <source src="civil.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="infinitywar" />
    <source src="infinitywar.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="panther" />
    <source src="panther.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="antman2" />
    <source src="antman2.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="marvel" />
    <source src="marvel.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="endgame" />
    <source src="endgame.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="spiderman" />
    <source src="spiderman.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="blackwidow" />
    <source src="blackwidow.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="shangchi" />
    <source src="shangchi.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="eternals" />
    <source src="eternals.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="nowayhome" />
    <source src="nowayhome.mp4" type="video/mp4" />

    </video>
    <video autoplay muted loop id="dr2" />
    <source src="dr2.mp4" type="video/mp4" />

    </video> -->



    <script>
      var cursor = document.getElementById("cursor");
      document.body.addEventListener("mousemove", function(e) {
        cursor.style.left = e.clientX + "px",
          cursor.style.top = e.clientY + "px";
      });



      /*-----------------1----------------*/
      /*-----------------1----------------*/
      /*-----------------1----------------*/
      var video1 = document.getElementById("ironman1");

      function myFunction1() {
        document.getElementById("ironman1").style.opacity = "1";
        video1.pause();
        video1.currentTime = 0;
        video1.load();
      }

      function exit1() {
        document.getElementById("ironman1").style.opacity = "0";
      }


      /*-----------------2----------------*/
      /*-----------------2----------------*/
      /*-----------------2----------------*/
      var video2 = document.getElementById("Hulk");

      function myFunction2() {
        document.getElementById("Hulk").style.opacity = "1";
        video2.pause();
        video2.currentTime = 0;
        video2.load();
      }

      function exit2() {
        document.getElementById("Hulk").style.opacity = "0";
      }

      /*-----------------3----------------*/
      /*-----------------3----------------*/
      /*-----------------3----------------*/
      var video3 = document.getElementById("Ironman2");

      function myFunction3() {
        document.getElementById("Ironman2").style.opacity = "1";
        video3.pause();
        video3.currentTime = 0;
        video3.load();
      }

      function exit3() {
        document.getElementById("Ironman2").style.opacity = "0";
      }

      /*-----------------4----------------*/
      /*-----------------4----------------*/
      /*-----------------4----------------*/
      var video4 = document.getElementById("Thor");

      function myFunction4() {
        document.getElementById("Thor").style.opacity = "1";
        video4.pause();
        video4.currentTime = 0;
        video4.load();
      }

      function exit4() {
        document.getElementById("Thor").style.opacity = "0";
      }

      /*-----------------5----------------*/
      /*-----------------5----------------*/
      /*-----------------5----------------*/
      var video5 = document.getElementById("FirstAvenger");

      function myFunction5() {
        document.getElementById("FirstAvenger").style.opacity = "1";
        video5.pause();
        video5.currentTime = 0;
        video5.load();
      }

      function exit5() {
        document.getElementById("FirstAvenger").style.opacity = "0";
      }

      /*-----------------6----------------*/
      /*-----------------6----------------*/
      /*-----------------6----------------*/
      var video6 = document.getElementById("Avengers");

      function myFunction6() {
        document.getElementById("Avengers").style.opacity = "1";
        video6.pause();
        video6.currentTime = 0;
        video6.load();
      }

      function exit6() {
        document.getElementById("Avengers").style.opacity = "0";
      }

      /*-----------------7----------------*/
      /*-----------------7----------------*/
      /*-----------------7----------------*/
      var video7 = document.getElementById("ironman3");

      function myFunction7() {
        document.getElementById("ironman3").style.opacity = "1";
        video7.pause();
        video7.currentTime = 0;
        video7.load();
      }

      function exit7() {
        document.getElementById("ironman3").style.opacity = "0";
      }
      /*-----------------8----------------*/
      /*-----------------8----------------*/
      /*-----------------8----------------*/
      var video8 = document.getElementById("thor2");

      function myFunction8() {
        document.getElementById("thor2").style.opacity = "1";
        video8.pause();
        video8.currentTime = 0;
        video8.load();
      }

      function exit8() {
        document.getElementById("thor2").style.opacity = "0";
      }
      /*-----------------9----------------*/
      /*-----------------9----------------*/
      /*-----------------9----------------*/
      var video9 = document.getElementById("");

      function myFunction9() {
        document.getElementById("captain2").style.opacity = "1";
        video9.pause();
        video9.currentTime = 0;
        video9.load();
      }

      function exit9() {
        document.getElementById("captain2").style.opacity = "0";
      }
      /*-----------------10----------------*/
      /*-----------------10----------------*/
      /*-----------------10----------------*/
      var video10 = document.getElementById("gaurdians");

      function myFunction10() {
        document.getElementById("gaurdians").style.opacity = "1";
        video10.pause();
        video10.currentTime = 0;
        video10.load();
      }

      function exit10() {
        document.getElementById("gaurdians").style.opacity = "0";
      }
      /*-----------------11----------------*/
      /*-----------------11----------------*/
      /*-----------------11----------------*/
      var video11 = document.getElementById("ultron");

      function myFunction11() {
        document.getElementById("ultron").style.opacity = "1";
        video11.pause();
        video11.currentTime = 0;
        video11.load();
      }

      function exit11() {
        document.getElementById("ultron").style.opacity = "0";
      }
      /*-----------------12----------------*/
      /*-----------------12----------------*/
      /*-----------------12----------------*/
      var video12 = document.getElementById("antman");

      function myFunction12() {
        document.getElementById("antman").style.opacity = "1";
        video12.pause();
        video12.currentTime = 0;
        video12.load();
      }

      function exit12() {
        document.getElementById("antman").style.opacity = "0";
      }
      /*-----------------13----------------*/
      /*-----------------13----------------*/
      /*-----------------13----------------*/
      var video13 = document.getElementById("civil");

      function myFunction13() {
        document.getElementById("civil").style.opacity = "1";
        video13.pause();
        video13.currentTime = 0;
        video13.load();
      }

      function exit13() {
        document.getElementById("civil").style.opacity = "0";
      }



      /*-----------------14----------------*/
      /*-----------------14----------------*/
      /*-----------------14----------------*/
      var video14 = document.getElementById("dr");

      function myFunction14() {
        document.getElementById("dr").style.opacity = "1";
        video14.pause();
        video14.currentTime = 0;
        video14.load();
      }

      function exit14() {
        document.getElementById("dr").style.opacity = "0";
      }
      /*-----------------15----------------*/
      /*-----------------15----------------*/
      /*-----------------15----------------*/
      var video15 = document.getElementById("gaurdians2");

      function myFunction15() {
        document.getElementById("gaurdians2").style.opacity = "1";
        video15.pause();
        video15.currentTime = 0;
        video15.load();
      }

      function exit15() {
        document.getElementById("gaurdians2").style.opacity = "0";
      }
      /*-----------------16----------------*/
      /*-----------------16----------------*/
      /*-----------------16----------------*/
      var video16 = document.getElementById("homecoming");

      function myFunction16() {
        document.getElementById("homecoming").style.opacity = "1";
        video16.pause();
        video16.currentTime = 0;
        video16.load();
      }

      function exit16() {
        document.getElementById("homecoming").style.opacity = "0";
      }

      /*-----------------17----------------*/
      /*-----------------17----------------*/
      /*-----------------17----------------*/
      var video17 = document.getElementById("thor3");

      function myFunction17() {
        document.getElementById("thor3").style.opacity = "1";
        video17.pause();
        video17.currentTime = 0;
        video17.load();
      }

      function exit17() {
        document.getElementById("thor3").style.opacity = "0";
      }

      /*-----------------18----------------*/
      /*-----------------18----------------*/
      /*-----------------18----------------*/
      var video18 = document.getElementById("panther");

      function myFunction18() {
        document.getElementById("panther").style.opacity = "1";
        video18.pause();
        video18.currentTime = 09
        video18.load();
      }

      function exit18() {
        document.getElementById("panther").style.opacity = "0";
      }
      /*-----------------19----------------*/
      /*-----------------19----------------*/
      /*-----------------19----------------*/
      var video19 = document.getElementById("infinitywar");

      function myFunction19() {
        document.getElementById("infinitywar").style.opacity = "1";
        video19.pause();
        video19.currentTime = 0;
        video19.load();
      }

      function exit19() {
        document.getElementById("infinitywar").style.opacity = "0";
      }
      /*-----------------20--------------*/
      /*-----------------20----------------*/
      /*-----------------20----------------*/
      var video20 = document.getElementById("antman2");

      function myFunction20() {
        document.getElementById("antman2").style.opacity = "1";
        video20.pause();
        video20.currentTime = 0;
        video20.load();
      }

      function exit20() {
        document.getElementById("antman2").style.opacity = "0";
      }
      /*-----------------21--------------*/
      /*-----------------21----------------*/
      /*-----------------21----------------*/
      var video21 = document.getElementById("marvel");

      function myFunction21() {
        document.getElementById("marvel").style.opacity = "1";
        video21.pause();
        video21.currentTime = 0;
        video21.load();
      }

      function exit21() {
        document.getElementById("marvel").style.opacity = "0";
      }
      /*-----------------22--------------*/
      /*-----------------22----------------*/
      /*-----------------22----------------*/
      var video22 = document.getElementById("endgame");

      function myFunction22() {
        document.getElementById("endgame").style.opacity = "1";
        video22.pause();
        video22.currentTime = 0;
        video22.load();
      }

      function exit22() {
        document.getElementById("endgame").style.opacity = "0";
      }
      /*-----------------23--------------*/
      /*-----------------23----------------*/
      /*-----------------23----------------*/
      var video23 = document.getElementById("spiderman");

      function myFunction23() {
        document.getElementById("spiderman").style.opacity = "1";
        video23.pause();
        video23.currentTime = 0;
        video23.load();
      }

      function exit23() {
        document.getElementById("spiderman").style.opacity = "0";
      }
      /*-----------------24--------------*/
      /*-----------------24----------------*/
      /*-----------------24----------------*/
      var video24 = document.getElementById("blackwidow");

      function myFunction24() {
        document.getElementById("blackwidow").style.opacity = "1";
        video24.pause();
        video24.currentTime = 0;
        video24.load();
      }

      function exit24() {
        document.getElementById("blackwidow").style.opacity = "0";
      }

      /*-----------------25--------------*/
      /*-----------------25----------------*/
      /*-----------------25----------------*/
      var video25 = document.getElementById("shangchi");

      function myFunction25() {
        document.getElementById("shangchi").style.opacity = "1";
        video25.pause();
        video25.currentTime = 0;
        video25.load();
      }

      function exit25() {
        document.getElementById("shangchi").style.opacity = "0";
      }

      /*-----------------26--------------*/
      /*-----------------26----------------*/
      /*-----------------26----------------*/
      var video26 = document.getElementById("eternals");

      function myFunction26() {
        document.getElementById("eternals").style.opacity = "1";
        video26.pause();
        video26.currentTime = 0;
        video26.load();
      }

      function exit26() {
        document.getElementById("eternals").style.opacity = "0";
      }
      /*-----------------27--------------*/
      /*-----------------27----------------*/
      /*-----------------27----------------*/
      var video27 = document.getElementById("nowayhome");

      function myFunction27() {
        document.getElementById("nowayhome").style.opacity = "1";
        video27.pause();
        video27.currentTime = 0;
        video27.load();
      }

      function exit27() {
        document.getElementById("nowayhome").style.opacity = "0";
      }
      /*-----------------28--------------*/
      /*-----------------28----------------*/
      /*-----------------28----------------*/
      var video28 = document.getElementById("dr2");

      function myFunction28() {
        document.getElementById("dr2").style.opacity = "1";
        video28.pause();
        video28.currentTime = 0;
        video28.load();
      }

      function exit28() {
        document.getElementById("dr2").style.opacity = "0";
      }
    </script>
</body>

</html>