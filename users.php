<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>

<h1 class="text-info text-center"></h1>

<table class="table table-hover table-success mt-5 pt-5">
    <tr>
        <th>Name</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Confirm</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>

    <?php
    require_once "dbcon.php";
//SELECT QUERY TO FETCH DATA
    $selectQuery = "SELECT * FROM `signup` WHERE 1";

    //GRAB USERS USING MYSQLI QUERY
    $users = mysqli_query($conn,$selectQuery);

    //USE A LOOP TO DISPLAY ALL THE USERS
    foreach ($users as $user){
        $id = $user["id"];
        $fname = $user["fname"];
        $lname = $user["lname"];
        $email = $user["email"];
        $password = $user["password"];
        $confirm = $user["confirm"];


        echo "<tr>
                    <td>$fname</td>
                    <td>$lname</td>
                    <td>$email</td>
                    <td>$password</td>
                    <td>$confirm</td>
                    <td><a class='btn btn-success' href='update.php?update=$id&fname=$fname&lname=$lname&email=$email&password=$password&confirm=$confirm'>Update</a></td>
                    <td><a class='btn btn-danger' href='delete.php?delete=$id'>Delete</a></td>
              </tr>";
    }
    ?>
</table>
<br>
<a class="btn btn-success btn-block" href="signup.php">ADD USERS</a>
</body>
</html>