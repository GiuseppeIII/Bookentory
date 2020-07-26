<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title><?= $_SESSION['title'] ?> · Bookentory</title>
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

<button onclick="location.href='booklist.php'" class="btn btn-lg float-right btn-dark" type="button">Book List</button>

</html>

<?php
$conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');
$title=$_SESSION['title'];
$sql = "SELECT * FROM books WHERE title='$title'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
        echo "<B> id | title | author | language | ISBN | Year Published <br></b>";
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"]." | ".$row["title"]." | ".$row["author"]." | ".$row["language"]." | ".$row["ISBN"]." | ".$row["year_published"]."<br>";
    }
}
?>
