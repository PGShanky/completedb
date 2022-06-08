<?php
if (isset($_POST["GO"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];
}
require_once "dbcon.php";

$query = "INSERT INTO `signup`(`id`, `fname`, `lname`, `email`, `password`, `confirm`) 
          VALUES (NULL,'$fname','$lname','$email','$password','$confirm')";
$save = mysqli_query($conn, $query);

if (isset($save)){
    echo ("Cheers!You have been successfully registered");
}
else{
    echo ("Sign Up was not successful");
}