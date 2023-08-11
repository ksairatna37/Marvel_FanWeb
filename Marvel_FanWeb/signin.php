
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Login | Sign In To Marvel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="icon" href="favicon.png" type="image/png" sizes="76x76" />
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(body4.mp4);
            background-size: cover;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        label {
            text-align: center;
        }

        .container {
            width: 380px;
            height: 600px;
            background-color: #ffffff;
            color: #ffff;
            left: 50%;
            top: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            border: 0px;
            border-top: 10px solid;
            border-color: rgb(232, 37, 37);
        }

        .avatar {
            background-size: cover;
            width: 100px;
            height: 100px;
            margin-left: 135px;
            border-radius: 300px;
            position: absolute;
            top: -50px;
        }

        .container input {
            width: 80%;
            margin-bottom: 20px;
        }

        .container input[type="text"],
        input[type="password"],
        input[type="email"] {
            border: none;
            border-bottom: 1px solid rgb(0, 0, 0);
            background: transparent;
            outline: none;
            height: 40px;
            margin-left: 35px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            caret-color: red;
        }

        .container input {
            width: 80%;
            margin-bottom: 20px;
        }

        .submit {
            width: 300px;
            padding-left: 11px;
            border: none;
            background-color: red;
            outline: none;
            color: rgb(255, 255, 255);
            height: 41px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 20px;
            font-family: Roboto;
            text-transform: uppercase;
            letter-spacing: 0;
            text-align: center;
        }

        .submit:hover {
            cursor: pointer;
            color: black;
        }

        .name {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            padding-top: 55px;
            color: rgb(0, 0, 0);
            text-align: center;
            letter-spacing: 0;
        }

        .container p {
            padding-top: 5px;
            padding-left: 1cm;
        }

        .container input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-left: 35px;
            background: blue;
        }

        .showpassword {
            display: inline-flex;
        }

        #showpass {
            margin: 4px 10px;
            font-family: Roboto;
            font-size: 16px;
            color: black;
            font-weight: 500px;
        }

        .animate:focus {
            border-bottom: 1px solid red;
            border-radius: 5px;
        }

        input[type="text"]:focus {
            border-bottom: 1px solid red;
        }

        #already-account {
            margin-left: 35px;
            text-decoration: none;
            color: black;
            font-family: Roboto;
            font-size: 15px;
        }

        #already-account:hover {
            cursor: unset;
        }

        a {
            font-weight: 300px;
            color: red;
        }
    </style>
</head>

<body>
        <video autoplay muted loop id="myVideo">
            <source src="body4.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <div class="container">
            <img src="marvel-comic-logo-badge-modified.png" class="avatar" />
            <h3 class="name">CREATE YOUR ACCOUNT</h3>
            <form action="validation.php" method="post" enctype="multipart/form-data">
                <p>
                    <font face="-apple-system, BlinkMacSystemFont, Segoe UI, Roboto,
            Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif" size="4px" color="black">Please Enter Your Credentials</font>
                </p>
                <input type="text" name="username" value="" class="animate" placeholder="Username" /><br>
                <input type="email" name="email" value="" class="animate" placeholder="Email Address" required /><br>
                <input type="password" id="showpassword" name="password" placeholdervalue="" class="animate" placeholder="Create Password" /><br>
                <div class="showpassword">
                    <div id="showpassword">
                        <input type="checkbox" onclick="showpass()">
                    </div>
                    <div id="showpass">Show Password</div>
                </div>
                <script>
                    function showpass() {
                        var x = document.getElementById("showpassword");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <p>
                    <button class="submit" type="submit">Create Account</button>
                </p><br>
                <div id="already-account">
                    Already have an account? <a href="http://localhost/php/log.php">Click To Login </a>
                </div>
            </form>
        </div>
</body>

</html>