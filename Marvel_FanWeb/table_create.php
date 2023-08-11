<?php

$con = mysqli_connect('localhost', 'root', '',);

if (!$con) 
{
    echo "Error connecting to server: ";
}
else 
{
    echo "Server connected successfully.";
}

$sql = "CREATE DATABASE newdatabase";

mysqli_query($con, $sql);

?>