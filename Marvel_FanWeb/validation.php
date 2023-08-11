<?php

    $con = mysqli_connect('localhost', 'root','','jarvis');

    $username = $_POST['username'];
    $email = $_POST['email'];   
    $password = $_POST['password'];



    $sql = "INSERT INTO `xyz` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        echo "Contact Records Inserted";
    }
    ?>
    <style>

        
        a{
            display: flex;
            justify-content: center;
            position: absolute;
            left: 1000px;
            top: 360px;
            color: white;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            font-weight: 600;
            width: 120px;
            height: 40px;
            border-radius: 20px;
            background-color: red;
        }
        body{
            position: fixed;
            background-color: black;
        }
        img{
            position: relative;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <html>
        <img src="landing.jpg" height="750" width="1000">
        <a href="http://localhost/php/log.php" >Log In</a>
    </html>
