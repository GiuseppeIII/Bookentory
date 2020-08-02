<?php
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title><?= $_SESSION['username'] ?> · Bookentory</title>
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
  <img class="mb-4" src="assets\images\book-icon.svg" alt="" width="112" height="112">
  <h1 class="h3 mb-4 font-weight-normal font-weight-bold">Hello <?= $_SESSION['username'] ?>!</h1>
  <button onclick="location.href='booklist.php'" class="btn btn-lg btn-dark btn-block" type="button">View All Books</button>
  <button onclick="location.href='seepersonallist.php'" class="mt-5 btn btn-lg btn-block btn-primary" type="button">See Personal List</button>
  <button onclick="location.href='addpersonalbook.php'" class="btn btn-lg btn-block btn-success" type="button">Add Personal Book</button>
  <button onclick="location.href='removepersonalbook.php'" class="btn btn-lg btn-block btn-danger" type="button">Remove Personal Book</button>
  <button onclick="location.href='changescore.php'" class="btn btn-lg btn-block btn-warning" type="button">Change Score</button>
</form>
</body>
</html>
