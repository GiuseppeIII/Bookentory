<?php
$_SESSION['help'] = '';
if(isset($_POST['submit'])=='addbook'){
    $conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');

    $title=$_POST['title'];
    $author=$_POST['author'];
    $language=$_POST['language'];
    $ISBN=$_POST['ISBN'];
    $year_published=$_POST['year_published'];

    $sql = "INSERT INTO books(title, author, language, ISBN, year_published)
            VALUES ('$title', '$author', '$language', '$ISBN', $year_published)";

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
    <title>Add Book · Bookentory</title>
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
  <button class="mt-2 btn btn-lg btn-dark btn-block" name="submit" type="submit" value="addbook">Add Book</button>
  <button onclick="location.href='booklist.php'" class="btn btn-lg btn-primary btn-block" type="submit">Book List</button>
</form>
</body>
</html>
