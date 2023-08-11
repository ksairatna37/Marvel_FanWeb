<?php

session_start();

$conn = mysqli_connect('localhost','root','','jarvis');

if(!$conn)
{
    die("Could not connect to server:".mysqli_connect_error());
}
echo "Connection established";


mysqli_select_db($conn,'jarvis');

$email=$_POST['email'];
$password=$_POST['password'];

$s=" select * from login ";

$result = mysqli_query($conn,$s);

if($result)
{
    echo "Database table created successfully <br>"; 
}
else
{
    echo "Database table not created successfully".mysqli_connect_error(); 
}

$num = mysqli_num_rows($result);

if ($num == 1)
{
    echo "Username already created";
}
else
{
    $reg="INSERT INTO 'login' ( 'email' , 'password' ) VALUES('[email]','[password]')"; 
    mysqli_query($conn,$reg);
    echo "regestration successfull";
}
?>