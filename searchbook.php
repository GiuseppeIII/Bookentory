<?php
session_start();
$_SESSION['help'] = '';
if(isset($_POST['submit'])=='searchbook'){
    $conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');

    $title=$_POST['title'];

    $sql = "SELECT * FROM books WHERE title = '$title'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==0){
        $_SESSION['help'] = "This book could not be found. Try another book.";
    }
    else{
        $_SESSION['help'] = "This book was found! Redirecting...";
        $_SESSION['title'] = $title;
        header("location: searchbookpage.php");
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Search Books · Bookentory</title>
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
  <img class="mb-4" src="assets\images\searchicon.svg" alt="" width="112" height="112">
  <h1 class="h3 mb-4 font-weight-normal font-weight-bold">Search Books</h1>
  <label for="inputTitle" class="sr-only">Title</label>
  <input type="text" id="inputTitle" class="form-control" placeholder="Title" name="title" required>
  <button class="mt-2 btn btn-lg btn-dark btn-block" name="submit" type="submit" value="searchbook">Search Books</button>
  <button onclick="location.href='booklist.php'" class="btn btn-lg btn-primary btn-block" type="submit">Book List</button>
</form>
</body>
</html>
