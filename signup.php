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
    <title>Sign Up</title>
</head>
<body class="text-center">
<div class="row justify-content-center align-items-center mt-5">
    <form class="form-signup " action="code.php" method="post">

        <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>

        <label for="fname" class="sr-only">First Name</label>
          <input name="fname" type="text"  class="form-control" placeholder="First Name" required autofocus><br>

        <label for="lname" class="sr-only">Last Name</label>
        <input name="lname" type="text" class="form-control" placeholder="Last Name" required><br>

        <label for="email" class="sr-only">Email address</label>
        <input name="email"  type="email" class="form-control" placeholder="Email address" required autofocus><br>

        <label for="password" class="sr-only">Password</label>
        <input name="password" type="password"  class="form-control" placeholder="Password" required><br>

        <label for="confirm" class="sr-only">Password</label>
        <input name="confirm" type="password"  class="form-control" placeholder="Confirm Password" required><br>

        <button name="GO" class="btn btn-lg btn-success btn-block" type="submit">GO</button>
        <br>

        <a class="btn btn-success" style="text-decoration: none" href="users.php">USERS</a>

    </form>

</div>
</body>
</html>
