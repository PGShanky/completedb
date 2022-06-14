<?php

if (isset($_GET["delete"])){
//RECEIVE ID FROM URL
    $userId = $_GET["delete"];
//CONNECTION DB
    require_once "dbcon.php";
//DELETE QUERY
    $deleteQuery = "DELETE FROM `signup` WHERE id='$userId'";
    //DELETE USING QUERY
    $delete = mysqli_query($conn,$deleteQuery);
//CHECK IF SUCCESSFUL
if (isset($delete)){
    header("location:users.php");
}
}
