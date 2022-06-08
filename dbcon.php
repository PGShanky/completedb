<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "crud";

$conn = mysqli_connect($host,$user,$password,$db);

//
//if (isset($conn)){
//    echo ("Connection Successful");
//}

if (!isset($conn)){
    die("Connection Failed");
}