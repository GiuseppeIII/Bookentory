<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Book List · Bookentory</title>
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
<link href="booklist.css" rel="stylesheet">

<button onclick="location.href='modifybook.php'" class="btn btn-lg float-right btn-warning" type="button">Modify Book</button>
<button onclick="location.href='removebook.php'" class="btn btn-lg float-right btn-danger" type="button">Remove Book</button>
<button onclick="location.href='addbook.php'" class="btn btn-lg float-right btn-success" type="button">Add Book</button>
<button onclick="location.href='searchbook.php'" class="btn btn-lg float-right btn-primary" type="button">Search Books</button>
<button onclick="location.href='user-page.php'" class="btn btn-lg float-right btn-dark" type="button">User Page</button>

</html>

<?php
session_start();

$conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');
$idUser = $_SESSION['idUsers'];
$sql = "SELECT booksId FROM userlist WHERE userId = $idUser ORDER BY booksId";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0){
        echo "<B> id <br></b>";
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["booksId"]."<br>";
    }
}
?>
