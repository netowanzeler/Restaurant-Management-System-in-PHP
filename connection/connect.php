<?php

//main connection file for both admin & front end
$servername = "lightskyblue-owl-392240.hostingersite.com"; //server
$username = "u345511044_baiaofood"; //username
$password = "b@iAofood!@#123"; //password
$dbname = "u345511044_baiaofood_db";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>
