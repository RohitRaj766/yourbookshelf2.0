<?php 

$servername="localhost";
// $database="yourbookshelf";
$username="root";
$password="";

// Creating Connection


$connection = mysqli_connect($servername, $username, $password);

mysqli_select_db($connection,"yourbookshelf");

// Checking Connection

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    }
 else{   
    // echo ("Connected successfully");
}
    // mysqli_close($connection);


?>