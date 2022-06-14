<?php

//CHECK BUTTON
if (isset($_POST["update"])){
//    RECEIVE DATA
    $userId = $_POST["id"];
    $updatefname = $_POST["fname"];
    $updatelname = $_POST["lname"];
    $updateemail = $_POST["email"];
    $updatepassword = $_POST["password"];
    $updateconfirm = $_POST["confirm"];
//    CONNECT TO D TO RETURN DATA
require_once "dbcon.php";
//CREATE UPDATE QUERY
    $updateQuery = "UPDATE `signup` SET `fname`='$updatefname',`lname`='$updatelname',
                    `email`='$updateemail',`password`='$updatepassword',`confirm`='$updateconfirm' WHERE id='$userId'";
//    EXECUTE UPDATE QUERY
    $update = mysqli_query($conn,$updateQuery);
//    CHECK IF UPDATE WAS SUCCESSFUL
if (isset($update)){
//    REDIRECT TO USERS.PHP TO SEE CHANGES
    header("location:users.php");
}
else{
    echo "Update Failed";
}
}