<?php
$_SESSION['help'] = '';
if(isset($_POST['submit'])=='register'){
    $conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "INSERT INTO users(username, email, password)
            VALUES ('$username', '$email', '$password')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['help'] = "You are now registered as $username, please sign in!";
    }
    else{
        $_SESSION['help'] = "An error occured, please try a different name.";
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Register · Bookentory</title>
    <link rel="icon" type="image/svg+xml" href="assets\images\favicon.svg">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
<form class="form-signin" method="POST">
  <div class="mt-3 mb-3 text-center text-muted"><?= $_SESSION['help'] ?></div>
  <img class="mb-4" src="assets\images\book-icon.svg" alt="" width="112" height="112">
  <h1 class="h3 mb-4 font-weight-normal font-weight-bold">Register for Bookentory!</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required>
  <label for="inputUsername" class="sr-only">Username</label>
  <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  <button class="mt-2 btn btn-lg btn-dark btn-block" name="submit" type="submit" value="register">Register</button>
</form>
</body>
</html>
