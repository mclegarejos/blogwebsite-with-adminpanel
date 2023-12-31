<?php
session_start();
include("db.php");
$category = isset($_GET["category"]) ? $_GET["category"] : '';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!--- GOOGLE FONTS -->
      <link href="https://fonts.googleapis.com/css2/family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>MY BLOG</title>
  </head>

  <body>

    <!--MENU -->
  <nav class="navbar navbar-expand-lg navbar-light mynav">
  <a class="navbar-brand" href="index.php"><img width="100px" src="img/logo.png"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="categories.php?category=TRAVEL">TRAVEL<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item active">
          <a class="nav-link" href="categories.php?category=FOOD">FOOD</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="categories.php?category=HEALTH">HEALTH</a>
        </li>
    </ul>
  </div>
</nav>


<!-- TEST CONTENT -->
<div class="container">
      <div class="row">
        <div class="col-12">
          <?php
            if (!empty($category)) {
              $sql = "SELECT * FROM posts WHERE category = '$category'";
              $result = mysqli_query($conn, $sql);

              if (!$result) {
                echo "Error: " . mysqli_error($conn);
              }

              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                  echo "<br>";
                  echo "<div class='post'>";
                  echo "<h4 class='title'>".$row["title"]."</h4><hr>
                        <p class='content'>".$row["content"]."</p>";
                  echo "</div>"; 
                }
              } else {
                echo "<h2>No posts found in the selected category.</h2>";
              }
            } else {
              echo "<h2>Recommendations for You</h2>";
              echo "<p>Discover interesting blogs in various categories. Choose a category from the navigation above.</p>";
            }
          ?>
        </div>
      </div>
    </div>





    






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>