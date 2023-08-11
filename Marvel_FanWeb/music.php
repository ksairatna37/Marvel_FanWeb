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
  <title>Marvel Music | Marvel Cinematic Universe(MCU)</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Poppins&family=Roboto&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Finlandica:wght@500&family=League+Gothic&family=Open+Sans:wght@300&family=Roboto&display=swap"
    rel="stylesheet" />
  <link rel="icon" href="favicon.png" type="image/png" sizes="76x76" />
  <script src="https://kit.fontawesome.com/890dab50aa.js" ; crossorigin="anonymous" ;></script>
  <style>
    body {
      background: linear-gradient(to bottom right,
          rgb(33, 35, 61),
          rgb(25, 22, 45));
    }

    .column1 {
      width: 10%;
      height: 600px;
      display: flex;
      flex-direction: column;
    }

    .column2 {
      width: 90%;
      height: 600px;
    }

    .column1 img {
      width: 80px;
      height: 80px;
      padding: 25% 30%;
      border-radius: 50px;
    }
    .column1 img:hover{
      cursor: pointer;
    }

    .column3 {
      width: 100%;
      height: 142px;
      border-top-left-radius: 70px;
      border-top-right-radius: 70px;
      background: linear-gradient(to bottom right,
          rgb(13, 17, 71),
          rgb(30, 29, 39));
    }

    .box {
      display: flex;
    }

    i {
      color: rgb(255, 255, 255);
      padding-left: 37%;
      padding-top: 35%;
    }

    i:hover {
      cursor: pointer;
    }

    .home_logo {
      width: 100%;
    }

    .home_logo i:hover {
      cursor: pointer;
    }

    .nav {
      display: flex;
      position: relative;
      height: 100px;
      width: 100%;
    }

    #search_logo {
      position: relative;
      width: 50px;
      height: 100px;
      margin-top: 25px;
      padding-left: 20px;
    }

    #search_logo i {
      font-size: 1.3rem;
    }

    #lessthan {
      position: relative;
      width: 2%;
      height: 100px;
      justify-content: center;
      text-align: center;
      font-size: 25px;
      font-weight: 900;
      padding-top: 30px;
      padding-left: 30px;
    }

    #greaterthan {
      position: relative;
      width: 2%;
      height: 100px;
      text-align: center;
      font-size: 25px;
      font-weight: 900;
      padding-top: 30px;
      padding-left: 30px;
      opacity: 30%;
    }

    #lessthan i {
      font-size: smaller;
    }

    #greaterthan i {
      font-size: smaller;
    }

    .search {
      display: flex;
      position: relative;
      width: 700px;
      height: 100px;
      padding-left: 3rem;
    }

    #searchline {
      background: none;
      width: 500px;
      height: 25px;
      border-top: 0;
      border-left: 0;
      border-right: 0;
      border-bottom: 1px solid white;
      color: white;
      font-family: Roboto;
    }

    #searchline:focus {
      outline: none;
    }

    ::placeholder {
      color: rgb(255, 255, 255);
      font-family: Roboto;
      font-size: 13px;
    }

    .searchline {
      position: relative;
      width: 510px;
      height: 100px;
      font-family: Roboto;
      padding-top: 38px;
      padding-left: 5px;
    }

    .notification {
      display: flex;
      position: relative;
      justify-content: center;
      padding-top: 3rem;
      padding-left: 25rem;
    }

    #notification_button i {
      color: white;
      text-decoration: none;
      position: relative;
      font-size: 1.5rem;
    }

    #notification_button i:hover {
      cursor: pointer;
    }

    #badge {
      position: absolute;
      top: 35px;
      right: -19px;
      padding: 3px 7px;
      border-radius: 45%;
      background-color: red;
      color: white;
      font-size: 13px;
      font-family: Roboto;
      font-weight: 900;
    }

    .Playlist {
      display: flex;
      position: relative;
      width: 70%;
      height: 70px;
      text-align: left;
    }

    .playlistname {
      color: white;
      font-family: "Poppins", sans-serif;
      font-size: 25px;
      font-weight: 400;
      padding-top: 7px;
      padding-left: 35px;
    }

    .more {
      display: flex;
      position: relative;
      padding-left: 70%;
      font-size: 12px;
      font-family: "Poppins", sans-serif;
      color: white;
      opacity: 0.5;
      padding-top: 35px;
      transition: color 0.3s;
    }

    .more:hover {
      color: red;
      cursor: pointer;
    }

    .songs {
      display: flex;
      justify-content: space-evenly;
      width: 70%;
      height: 190px;
    }

    .song1 {
      height: 200px;
      width: 20%;
      margin-left: -30px;
      border-radius: 40px;
    }

    #more {
      font-size: 10px;
      padding-top: 5px;
      padding-left: 5px;
      transition: color 0.3s;
    }

    #more:hover {
      color: red;
      cursor: pointer;
    }

    #music1 {
      background: url(music1.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    #music2 {
      background: url(music2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    #music3 {
      background: url(music3.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    #music4 {
      background: url(music4.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    .song_description {
      display: flex;
      justify-content: space-evenly;
      width: 70%;
      height: 50px;
    }

    .song {
      height: 50px;
      width: 20%;
      margin-left: -30px;
      border-radius: 40px;
      font-family: "Finlandica", sans-serif;
      color: white;
      font-size: 15px;
      font-weight: 500;
      padding-top: 10px;
      text-align: center;
      transition: color 0.3s;
    }

    .song a:hover {
      color: red;
    }

    .recently {
      width: 70%;
      height: 111px;
      display: flex;
      justify-content: space-evenly;
    }

    .recently1 {
      display: flex;
      position: relative;
      width: 40%;
      height: 80px;

      top: 5px;
    }

    .recently2 {
      display: flex;
      position: relative;
      width: 40%;
      height: 80px;

      top: 5px;
    }

    .music4 {
      width: 20%;
      height: 80px;
      position: relative;

      background: url(music5.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    .music5 {
      width: 20%;
      height: 80px;
      position: relative;

      background: url(music6.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    .songname {
      width: 4 0%;
      height: 50px;
      position: relative;
      padding-left: 20px;
      font-family: "Finlandica", sans-serif;
      color: white;
      font-size: 16px;
      font-weight: 500;
      padding-top: 18px;
    }

    .songname span {
      color: white;
      font-size: 14px;
      font-weight: 500;
      opacity: 0.5;
      line-height: 30px;
      background-color: rgb(116, 116, 116);
      border-radius: 50px;
      padding: 4px;
    }

    .playtime {
      position: relative;
      top: 35px;
      left: 50px;
      color: white;
      font-family: "Finlandica", sans-serif;
      font-size: 12px;
      opacity: 0.7;
    }

    .rating {
      display: flex;
      position: relative;
      color: rgb(255, 247, 0);
      font-family: "Finlandica", sans-serif;
      top: 33.5px;
      left: 70px;
      font-size: 14px;
    }

    .rating span {
      font-size: 10px;
      position: relative;
      left: 1px;
    }

    .dots {
      position: relative;
      top: 30px;
      left: 90px;
    }

    .dots i {
      opacity: 0.5;
    }

    .dots i:hover {
      opacity: 1;
    }
    .container-audio {
      position: relative;
      top:10px;
      width: 66%;
      height: auto;
      padding: 20px;
      border-radius: 5px;
      color: #444;
      margin: 20px auto;
      overflow: hidden;
      background: linear-gradient(to bottom right,
      rgb(73, 82, 219),
      rgb(26, 12, 150));
  }
  audio {
    background: linear-gradient(to bottom right,
      rgb(73, 82, 219),
      rgb(26, 12, 150));
    width:100%;
  }
  .download_box{
    position: absolute;
    top: 120px;
    right: 35px;
    width:380px;
    height: 450px;
    background: linear-gradient(to bottom right,
    rgb(34, 27, 94),
    rgb(32, 32, 45));
      border-radius: 30px;
  }
  .downloading{
    position: relative;
    left: 20px;
    top:10px;
    font-family: "Poppins", sans-serif;
    font-size: 35px;
    color: rgb(61, 4, 234) ;
  }
  .downloading:hover{
    cursor: pointer;
  }
  .download{
    position: relative;
    top: 39px;
    left: 39px;
    width: 300px;
    height: 250px;
    border-radius: 30px;
    background: linear-gradient(to bottom right,
    rgb(32, 32, 45),
    rgb(34, 27, 94));
  }
  .free{
    position: absolute;
    top: 250px;
    left: 66px;
    font-size: 23px;
    font-family: "Poppins", sans-serif; 
    color: red;
    width: 300px;
  }
  .naav{
    color: gray;
    font-size: 22px;
    font-family: "Poppins", sans-serif;
    text-transform: uppercase;
    position: relative;
    top: -30px;
    left: 38px;
  }
  .naav:hover{
    cursor: pointer;
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
  </style>
</head>

<body>
  <div class="container">
    <div class="box">
      <div class="column1">
        <div class="user_logo">
          <img src="user_logo.jpg" alt="user_logo" />
          <div class="naav"><?php echo $_SESSION['username']; ?></div>
        </div>
        <div class="home_logo">
          <a href="http://localhost/php/homepage.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
        </div>
        <div class="home_logo">
          <i class="fa fa-music fa-lg" aria-hidden="true"></i>
        </div>
        <div class="home_logo">
          <i style="font-size: 24px" class="fa">&#xf1c7;</i>
        </div>
        <div class="home_logo">
          <i class="fas fa-sliders-h fa-lg" aria-hidden="true"></i>
        </div>
      </div>

      <div class="column2">
        <div class="nav">
          <div id="lessthan"><i class="fa-solid fa-less-than"></i></div>
          <div id="greaterthan"><i class="fa-solid fa-greater-than"></i></div>
          <div class="search">
            <div id="search_logo">
              <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <form>
              <div class="searchline">
                <input type="text" id="searchline" placeholder="Search for artists,songs,and..." required; />
              </div>
            </form>
          </div>

          <div class="notification">
            <div id="notification_button">
              <i class="fa-solid fa-bell fa-lg"></i>
            </div>
            <div id="badge"><span>2</span></div>
          </div>
        </div>
        <div class="Playlist">
          <div class="playlistname" style="font-size: 35px">Playlists</div>
          <div class="more">
            <a href="https://open.spotify.com/playlist/1fPVoQL5cE6bFmuHDn4lB2?si=cfa6e37320f64737"
              style="text-decoration: none; color:white;  " target="_blank"> MORE <i id="more"
                class="fa-solid fa-greater-than"></i></a>
          </div>
        </div>
        <div class="songs">
          <div class="song1" id="music1"><a href="#"> </a></div>
          <div class="song1" id="music2"><a href="#"> </a></div>
          <div class="song1" id="music3"><a href="#"> </a></div>
          <div class="song1" id="music4"><a href="#"> </a></div>
        </div>
        <div class="song_description">
          <div class="song" id="1">
            <a href="https://open.spotify.com/playlist/6xYFzSjhzzSGJDqdwK9pnf?si=3ffc3911072a4055"
              style="text-decoration: none; color:white;  " target="_blank">Doctor Strange in the <br />Multiverse of
              Madness</a>
          </div>
          <div class="song" id="2" style="line-height: 40px">
            <a href="https://open.spotify.com/album/28vjLYN5INkXPASsiFJ9wZ?si=012dbdb36ab845ac"
              style="text-decoration: none; color:white;  " target="_blank"> Marvel Music Collection</a>
          </div>
          <div class="song" id="3" style="line-height: 40px">
            <a href="https://open.spotify.com/album/1LESSO2UHZx5EbYV0QAhlR?si=b2867350920d422b"
              style="text-decoration: none; color:white;  " target="_blank"> Marvel Musical</a>

          </div>
          <div class="song" id="4">
            <a href="https://open.spotify.com/playlist/76WckOlpzIA63Kxspzf2RS?si=84ee016a708d4f5f"
              style="text-decoration: none; color:white;  " target="_blank"> Guardians of the Galaxy: <br />Awesome Mix
              Vol. 1</a>
          </div>
        </div>
        <div class="Playlist">
          <div class="playlistname" style="padding-top: 25px">
            Recently Played
          </div>
        </div>
        <div class="recently">
          <div class="recently1">
            <div class="music4"></div>
            <div class="songname">
              <a href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" style="text-decoration: none; color:white;"
                target="_blank"> Blinding lights</a><br /><span>Ms. Marvel</span>
            </div>
            <div class="playtime">2.38</div>
            <div class="rating">
              4.3
              <span><i class="fa-solid fa-star" style="color: rgb(255, 247, 0)"></i>
              </span>
            </div>
            <div class="dots"><i class="fa-solid fa-ellipsis"></i></div>
          </div>
          <div class="recently2">
            <div class="music5"></div>
            <div class="songname">
              <a href="https://www.youtube.com/watch?v=_bXJIxe2SUQ" style="text-decoration: none; color:white;"
                target="_blank">A Man Without Love</a><br /><span>Moonknight</span>
            </div>
            <div class="playtime">4.23</div>
            <div class="rating">
              4
              <span><i class="fa-solid fa-star" style="color: rgb(255, 247, 0)"></i>
              </span>
            </div>
            <div class="dots"><i class="fa-solid fa-ellipsis"></i></div>
          </div>
        </div>
      </div>
    </div>

    <div class="download_box">
      <div class="downloading">Download Songs From Here</div>
      <div class="download"></div>
      <div class="free"><a href="https://drive.google.com/drive/u/2/my-drive" target="_blank" style="text-decoration: none; color:red;">Marvel Songs & Music</a></div>
    </div>
   

    <div class="column3">
      <div class="container-audio">
        <audio controls>
          <source src="sound1.mp3" type="audio/ogg">
          Your browser dose not Support the audio Tag
        </audio>
      </div>
    </div>
  </div>
  <script>
      var cursor = document.getElementById("cursor");
      document.body.addEventListener("mousemove", function(e) {
        cursor.style.left = e.clientX + "px",
          cursor.style.top = e.clientY + "px";
      });
      </script>
</body>

</html>