<!doctype html>
<?php
session_start();

$conn = new mysqli('localhost', 'root', 'Giuseppe123.', 'bookentory');
$sql = "SELECT * FROM books";
$result = mysqli_query($conn,$sql);
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Book List · Bookentory</title>
    <link rel="icon" type="image/svg+xml" href="assets\images\favicon.svg">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.css" rel="stylesheet">
<link href="booklist.css" rel="stylesheet">

<nav class="navbar fixed-top navbar-expand-lg navbar-light style = bg-light">
  <a class="navbar-brand">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Functions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href='searchbook.php'>Search Books</a>
          <a class="dropdown-item" href='addbook.php'>Add Book</a>
          <a class="dropdown-item" href='removebook.php'>Remove Book</a>
          <a class="dropdown-item" href='modifybook.php'>Modify Book</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
