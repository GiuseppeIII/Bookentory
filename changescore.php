<?php
$_SESSION['help'] = '';
if(isset($_POST['submit'])=='modifybook'){
    $conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');

    $id=$_POST['id'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $language=$_POST['language'];
    $ISBN=$_POST['ISBN'];
    $year_published=$_POST['year_published'];

    $sql = "UPDATE books
            SET title='$title', author='$author', language='$language', ISBN='$ISBN', year_published=$year_published
            WHERE id=$id";

    if(mysqli_query($conn, $sql)){
        $_SESSION['help'] = "You have succesfully modified $title!";
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
    <title>Modify Book · Bookentory</title>
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
  <img class="mb-4" src="assets\images\modifyicon.svg" alt="" width="112" height="112">
  <h1 class="h3 mb-4 font-weight-normal font-weight-bold">Modify Book</h1>
  <label for="inputId" class="sr-only">BookId</label>
  <input type="number" id="inputBookId" class="form-control" placeholder="ID" name="id" required>
  <select name="bookRating" title="score" class="custom-select" required>
      <option value="" selected hidden>Score</option>
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
  </select>
  <label for="inputId" class="sr-only">bookRating</label>
  <button class="mt-2 btn btn-lg btn-dark btn-block" name="submit" type="submit" value="modifybook">Change Book Score</button>
  <button onclick="location.href='booklist.php'" class="btn btn-lg btn-primary btn-block" type="submit">Book List</button>
</form>
</body>
</html>
