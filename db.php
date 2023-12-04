<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myblog";


//CREATE CONNCETION

$conn = mysqli_connect($servername, $username, $password, $database);

//CHECK CONNECTION

if(!$conn){
    die("Connection failed". mysqli_connect_error());
}

?>