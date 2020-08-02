<?php
$_SESSION['help'] = '';
if(isset($_POST['submit'])=='addbook'){
    $conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');

    $id=$_POST['id'];

    $sql = "INSERT INTO userlist(userId, booksId, bookRating)
            VALUES ('$title', '$id', '$language', '$ISBN', $year_published)";

    if(mysqli_query($conn, $sql)){
        $_SESSION['help'] = "$title has now been added!";
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
    <title>Add Personal Book · Bookentory</title>
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
  <img class="mb-4" src="assets\images\plus.svg" alt="" width="112" height="112">
  <h1 class="h3 mb-4 font-weight-normal font-weight-bold">Add Book</h1>
  <label for="inputId" class="sr-only">BookId</label>
  <input type="ramge" id="inputRating" class="form-control" placeholder="Score" name="score" min="0" max="10" required>
  <label for="inputId" class="sr-only">bookRating</label>
  <input type="number" id="inputBookId" class="form-control" placeholder="ID" name="id" required>
  <button class="mt-2 btn btn-lg btn-dark btn-block" name="submit" type="submit" value="addbook">Add Book</button>
  <button onclick="location.href='user-page.php'" class="btn btn-lg btn-primary btn-block" type="submit">User Page</button>
</form>
</body>
</html>