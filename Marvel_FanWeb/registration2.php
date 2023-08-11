<?php
    
    session_start();

    $con = mysqli_connect('localhost', 'root','','jarvis');

        $username = $_POST['username'];    
        $password = $_POST['password'];
        // Check user is exist in the database
        $query    = "SELECT * FROM `xyz` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: homepage.php");
        } else {
            echo "Incorrect Username/password.";
        }   
?>