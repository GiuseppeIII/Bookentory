<?php
session_start();
$conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');
$title=$_SESSION['title'];
$sql = "SELECT * FROM books WHERE title='$title'";
$result = mysqli_query($conn,$sql);
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
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">author</th>
      <th scope="col">language</th>
      <th scope="col">ISBN</th>
      <th scope="col">Year Published</th>
    </tr>
  </thead>
  <tbody>
      <?php
      if (mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)) {?>
              <tr>
                <th scope = "row"> <?php echo $row["id"]?> </th>
                <td><?php echo $row["title"]?></td>
                <td><?php echo $row["author"]?></td>
                <td><?php echo $row["language"]?></td>
                <td><?php echo $row["ISBN"]?></td>
                <td><?php echo $row["year_published"]?></td>
        <?php }
      }
      ?>
  </tbody>
</table>
</html>
