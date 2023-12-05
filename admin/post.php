<?php
session_start();
include("../db.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="adminstyle.css">

    <title>MY BLOG ADMIN</title>
  </head>

  <body>
        <!--MENU -->
  <nav class="navbar navbar-expand-lg navbar-light mynav">
  <a class="navbar-brand" href="index.php"><img width="100px" src="../img/logo.png"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="post.php">POST<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item active">
          <a class="nav-link" href="new.php">NEW</a>
        </li>
    </ul>
  </div>
</nav>
    <div class="container">
    <?php
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)> 0){
                while($row = mysqli_fetch_assoc($result)){

                  echo "<br>";
                  echo "<div class='post'>";
                    echo"<h4 class='title'>".$row["title"]."</h4><hr>
                      <p class='content'>".$row["content"]."</p>";
                  echo "</div>"; 
                }
            }

        ?>


    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
