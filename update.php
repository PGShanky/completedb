<?php

//CHECK IF UPDATE BUTTON HAS BEEN CLICKED
if (isset($_GET["update"])){
    //RECEIVE VALUES FROM THE URL
    $receivedId = $_GET["update"];
    $receivedfname = $_GET["fname"];
    $receivedlname = $_GET["lname"];
    $receivedemail = $_GET["email"];
    $receivedpassword = $_GET["password"];
    $receivedconfirm = $_GET["confirm"];

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!--    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">-->
    <!--    <meta name="generator" content="Hugo 0.88.1">-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Update User</title>
</head>
<body class="text-center">
<div class="row justify-content-center align-items-center mt-5">
    <form class="form-signup " action="updatehandler.php" method="post">

        <h1 class="h3 mb-3 font-weight-normal">Update User</h1>

        <input value="<?php echo $receivedId?>" name="id" type="hidden">

        <label for="fname" class="sr-only">First Name</label>
        <input value="<?php echo $receivedfname?>" name="fname" type="text"  class="form-control" placeholder="First Name" required autofocus><br>

        <label for="lname" class="sr-only">Last Name</label>
        <input value="<?php echo $receivedlname?>" name="lname" type="text" class="form-control" placeholder="Last Name" required><br>

        <label for="email" class="sr-only">Email address</label>
        <input value="<?php echo $receivedemail?>" name="email"  type="email" class="form-control" placeholder="Email address" required autofocus><br>

        <label for="password" class="sr-only">Password</label>
        <input value="<?php echo $receivedpassword?>" name="password" type="password"  class="form-control" placeholder="Password" required><br>

        <label for="confirm" class="sr-only">Password</label>
        <input value="<?php echo $receivedconfirm?>" name="confirm" type="password"  class="form-control" placeholder="Confirm Password" required><br>

        <button name="update" class="btn btn-lg btn-success btn-block" value="update" type="submit">UPDATE</button>
        <br>

        <a class="btn btn-success" style="text-decoration: none" href="users.php">BACK</a>

    </form>

</div>
</body>
</html>

