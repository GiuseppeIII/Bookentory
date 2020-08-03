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
                <a class="nav-link" href='user-page.php'>User Page <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href='booklist.php'>All Books <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Database
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href='searchbook.php'>Search Books</a>
                  <a class="dropdown-item" href='addbook.php'>Add Book</a>
                  <a class="dropdown-item" href='removebook.php'>Remove Book</a>
                </div>
              </li>
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  My List
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href='seepersonallist.php'>Personal Book List</a>
                  <a class="dropdown-item" href='addpersonalbook.php'>Add Personal Book</a>
                  <a class="dropdown-item" href='removepersonalbook.php'>Remove Personal Book</a>
                  <a class="dropdown-item" href='changescore.php'>Change Score</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
  <body class="text-center">
<form class="form-signin" method="POST">
  <div class="mt-3 mb-3 text-center text-muted"><?= $_SESSION['help'] ?></div>
  <img class="mb-4" src="assets\images\modifyicon.svg" alt="" width="112" height="112">
  <h1 class="h3 mb-4 font-weight-normal font-weight-bold">Modify Book</h1>
  <label for="inputID" class="sr-only">ID</label>
  <input type="number" id="inputID" class="form-control mb-3" placeholder="ID" name="id" required>
  <label for="inputTitle" class="sr-only">Title</label>
  <input type="text" id="inputTitle" class="form-control" placeholder="Title" name="title" required>
  <label for="inputAuthor" class="sr-only">Author</label>
  <input type="text" id="inputAuthor" class="form-control" placeholder="Author" name="author" required>
  <label for="inputLanguage" class="sr-only">Languge</label>
  <input type="text" id="inputLanguage" class="form-control" placeholder="Language" name="language" required>
  <label for="inputISBN" class="sr-only">ISBN</label>
  <input type="text" id="inputISBN" class="form-control" placeholder="ISBN" name="ISBN" required>
  <label for="inputYearPublished" class="sr-only">YearPublished</label>
  <input type="number" id="inputYearPublished" class="form-control" placeholder="Year Published" name="year_published" required>
  <button class="mt-2 btn btn-lg btn-dark btn-block" name="submit" type="submit" value="modifybook">Modify Book</button>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
</html>
