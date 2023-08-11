<!DOCTYPE html>
<html>

<head>
    <title>Marvel News</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        div.one {
            background-color: black;
            text-align: center;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
            height: auto;
        }

        p {
            color: black;
            font-size: 2.5em;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
            margin: 20px 0;
        }

        h1 {
            color: black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
            margin: 20px 0;
        }

        h3 {
            color: black;
            text-decoration: none;
            text-align: center;
            margin: 20px 0;
        }

        h1:link,
        h3:link {
            color: red;
            text-decoration: none;
        }

        h1:visited,
        h3:visited {
            color: green;
            text-decoration: none;
        }

        h1:hover,
        h3:hover {
            color: red;
            text-decoration: none;
        }

        h1:active,
        h3:active {
            color: blue;
            text-decoration: none;
        }

        .image-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin: 0 -10px;
        }

        .section {
            width: 100%;
            max-width: 300px;
            margin: 10px;
        }

        .image-grid img {
            width: 100%;
            height: auto;
        }

        /* Adjust font size and margins for mobile */
        @media (max-width: 600px) {
            p,
            h1,
            h3 {
                font-size: 1.5em;
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
    <div class="one">
        <img src="MARVEL NEWS.jpg" class="center" height="80">
    </div>

    <p>LATEST MOVIES NEWS</p>
    <div class="two">
        <!-- Add other attributes to make it work better on mobile -->
        <a href="https://www.marvel.com/articles/movies/doctor-strange-in-the-multiverse-of-madness-character-costumes-explained">
            <img src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\N1.jpg" height="350" width="600">
            <h1>The Many Faces of Doctor Strange in the Multiverse of Madness Explained</h1>
        </a>
    </div>
    <div class="image-grid">
        <!-- Add similar mobile-friendly markup for other image sections -->
        <div class="section" id="1">
            <a href="https://www.marvel.com/articles/movies/thor-love-and-thunder-legacy-featurette">
                <img src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\N2.jpg">
                <h3>'Thor: Love and Thunder' New Featurette Celebrates the God of Thunder</h3>
            </a>
        </div>
        <div class="section" id="2">
            <a href="https://www.marvel.com/articles/movies/marvel-cinematic-universe-timeline-disney-plus">
                <img src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\N3.jpg">
                <h3>The Marvel Cinematic Universe Timeline on Disney+</h3>
            </a>
        </div>
        <div class="section" id="3">
            <a href="https://www.marvel.com/articles/movies/doctor-strange-in-the-multiverse-of-madness-disney-plus-now-streaming">
                <img src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\N4.jpg">
                <h3>'Doctor Strange in the Multiverse of Madness' Portals onto Disney+</h3>
            </a>
        </div>
    </div>

    <!-- Add marquee and other sections for mobile -->

    <!-- For the marquee, consider using a more modern alternative for better mobile support -->
    <div style="overflow: hidden;">
        <div style="display: inline-block; white-space: nowrap;">
            <img style="padding-right: 25px;" src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\Marvel.jpg" height="100">
            <img style="padding-right: 25px;" src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\Marvel.jpg" height="100">
            <img style="padding-right: 25px;" src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\Marvel.jpg" height="100">
            <img style="padding-right: 25px;" src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\Marvel.jpg" height="100">
            <img style="padding-right: 25px;" src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\Marvel.jpg" height="100">
        </div>
    </div>

    <p style="text-align: center;">LATEST COMICS NEWS </p>
    <div class="two">
        <a href="https://www.marvel.com/articles/comics/start-reading-comics-with-these-thor-stories">
            <img style="position: relative ; top: 100px;left: 75px;" src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\N5.jpg" height="350" width="600">
            <h1 style="text-align: center; margin-top: 10px;">Thor Stories To Read Right Now</h1>
        </a>
    </div>
    <div class="image-grid">
        <!-- Add similar mobile-friendly markup for other image sections -->
        <div class="section" id="1">
            <a href="https://www.marvel.com/articles/comics/demon-wars-the-iron-samurai-1-first-look-sends-mariko-into-battle">
                <img src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\N6.jpg">
                <h3>'Demon Wars: The Iron Samurai' #1 First Look Sends Mariko into Battle</h3>
            </a>
        </div>
        <div class="section" id="2">
            <a href="https://www.marvel.com/articles/comics/new-on-marvel-unlimited-july-2022">
                <img src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\N7.jpg">
                <h3>What's Coming to Marvel Unlimited This July</h3>
            </a>
        </div>
        <div class="section" id="3">
            <a href="https://www.marvel.com/articles/comics/dan-slott-mark-bagley-spider-verse-spider-man-1">
                <img src="C:\Users\banav\OneDrive\Desktop\wEBSITE pROJECT\N8.jpg">
                <h3>Dan Slott and Mark Bagley Bring About the End of the Spider-Verse in 'Spider-Man' #1</h3>
            </a>
        </div>
    </div>

</body>

</html>
