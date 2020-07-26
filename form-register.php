<?php
session_start();
$_SESSION['response'] = '';
$conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users(username, email, password)
      VALUES ('John', 'Doe', 'john@example.com')";

if($conn->query($sql) === true){
  $_SESSION['response'] = 'username registered';
}
else{
    $_SESSION['response'] = 'ERROR';
}

$conn->close();
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
<form class="form-signin">
  <div class="mb-5 text-muted text-center"><?= $_SESSION['response'] ?></div>
  <img class="mb-4" src="assets\images\book-icon.svg" alt="" width="112" height="112">
  <h1 class="h3 mb-4 font-weight-normal font-weight-bold">Register for Bookentory!</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required>
  <label for="inputUsername" class="sr-only">Username</label>
  <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  <button class="mt-2 btn btn-lg btn-dark btn-block" type="submit">Register</button>
  <p class="mt-3 mb-3 text-center text-muted">*There is no hashing or protection being done here, so make sure not to use any real passwords.</p>
</form>
</body>
</html>
