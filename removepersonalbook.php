<?php
session_start();
$_SESSION['help'] = '';
if(isset($_POST['submit'])=='removebook'){
    $conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');

    $id=$_POST['id'];
    $idUser = $_SESSION['idUsers'];
    $sql = "DELETE FROM userlist WHERE booksId=$id AND userId=$idUser";

    if(mysqli_query($conn, $sql)){
        $_SESSION['help'] = "Book $id has now been removed!";
    }
    else{
        $_SESSION['help'] = "An error occured, please try a different book.";
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Remove Personal Book · Bookentory</title>
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
  <img src="assets\images\minus.svg" alt="" width="112" height="112">
  <h1 class="h3 mb-4 font-weight-normal font-weight-bold">Remove Book</h1>
  <label for="inputID" class="sr-only">ID</label>
  <input type="number" id="inputID" class="form-control" placeholder="ID" name="id" required>
  <button class="mt-2 btn btn-lg btn-dark btn-block" name="submit" type="submit" value="removebook">Remove Book</button>
  <button onclick="location.href='user-page.php'" class="btn btn-lg btn-primary btn-block" type="submit">User Page</button>
</form>
</body>
</html>
