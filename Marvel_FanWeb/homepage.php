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
    Marvel Homepage | Fanmade Site of Marvel Cinematic Universe(MCU)
  </title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="icon" href="favicon.png" type="image/png" sizes="76x76" />
  <style>
    * {
      font-family: Roboto;
      font-weight: 400;
    }

    body {
      margin: 0;
    }

    #myVideo {
      width: 100%;
      height: 100%;
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
      position: relative;
      background: transparent;
      width: 20rem;
      box-shadow: 0rem 0.5rem 1rem 0rem rgba(0, 0, 0, 0.2);
      left:20px;
      margin-top: 25px;
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
      position: relative;
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
  </style>
</head>

<body>
  <div class="main">
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
      <a href="http://localhost/php/homepage.php" target="_blank" class="logo"><img src="marvel-logo.png" /></a>
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
    <video autoplay muted loop id="myVideo">
      <source src="backgroundvideo.mp4" type="video/mp4" />
      Your browser does not support HTML5 video.
    </video>
  </div>
  <div class="content">

  </div>
  <div class='cursor' id="cursor"></div>
  <script>
    var cursor = document.getElementById("cursor");
    document.body.addEventListener("mousemove", function(e) {
      cursor.style.left = e.clientX + "px",
        cursor.style.top = e.clientY + "px";
    });
  </script>
</body>

</html>