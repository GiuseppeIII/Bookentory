<?php
session_start();
$_SESSION['help'] = '';
if(isset($_POST['submit'])=='signin'){
    $conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==0){
        $_SESSION['help'] = "This combination of username and password does not work. Please try a different combination or register an account!";
    }
    else{
        $_SESSION['help'] = "Welcome!";
        $_SESSION['username'] = $username;
        $sql2 = "SELECT idUsers FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$sql2);
        $idUsersSql = mysqli_fetch_row($result);
        $idUsers=reset($idUsersSql);
        $_SESSION['idUsers'] = $idUsers;
        header("location: user-page.php");
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Sign In · Bookentory</title>
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
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    <link href="booklist.css" rel="stylesheet">
      </head>
    <body>
        <nav class="navbar navbar-custom fixed-top navbar-expand-lg navbar-light">
            <a class="navbar-brand" href='homepage.php'>
                <img src="assets\images\book-icon.svg" width="30" height="30" alt="">
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href='form-register.php'>Register <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
  <body class="text-center">
<form class="form-signin" method="POST">
  <div class="mt-3 mb-3 text-center text-muted"><?= $_SESSION['help'] ?></div>
  <img class="mb-4" src="assets\images\book-icon.svg" alt="" width="112" height="112">
  <h1 class="h3 mb-4 font-weight-normal font-weight-bold">Sign in to your Bookentory!</h1>
  <label for="inputUsername" class="sr-only">Username</label>
  <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  <button class="mt-2 btn btn-lg btn-primary btn-block" name="submit" type="submit" value="signin">Sign in</button>
  <button onclick="location.href='form-register.php'" class="btn btn-lg btn-dark btn-block" type="submit">Register</button>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
</html>
