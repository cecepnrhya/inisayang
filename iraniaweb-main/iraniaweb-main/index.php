<?php include("koneksidatabase.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
      @import url(Home.css);
    </style>
    <title>SMK BHAKTI ANINDYA</title>
  </head>
  <body >
  <!--navigation bar-->
    <nav class="navbar shadow-sm p-2 mb-2 bg-white navbar-expand-lg navbar-light fixed-top" style="position: relative;">
      <div class="container ">
        <a class="navbar-brand" href="#"><img class="img-fluid img-page2" src="gambar/Group 17.png "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="index.php">Jobs</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Career Blog</a>
            <a class="nav-link" href="#">Contact Us</a>
            <a class="nav-link" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    
    <?php
      error_reporting (0);
      $sRole = $_GET['role'];
      $sType = $_GET['type'];
      $sCity = $_GET['city'];
      
      $result = mysqli_query($conn, "SELECT * FROM kategori_job WHERE (`role` LIKE '%".$sRole."%') AND (`type` LIKE '%".$sType."%') AND (`city` LIKE '%".$sCity."%')");
    ?>
    
    <!--section1-->
    <div class="jumbotron main_page">
  
      <div class="title_page">
      <h4>Selamat datang <?php echo $_SESSION["email"]; ?></h4>
        <h1>Find Your Dream Job in BKK Bhakti Anindya!</h1>
        <p>A great place for better success</p>
        
      </div>
      <div class="search_job">
        <form class="job_search" action="index.php" method="GET">
          <input class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" type="text" name="role" placeholder=" Role">
          <input class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" type="text" name="type" placeholder=" Type">
          <input class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" type="text" name="city" placeholder=" City">
          <button type="submit" class="btn-light shadow" >Search</button>
        </form>
      </div>
      <div class="card_jobslist">
        <div class="row">
          <?php while ($res = mysqli_fetch_array($result)) { ?>
            <div class="column">
              <div class="card shadow-lg p-3 mb-5 bg-white">
                <br>
                <h5><?php echo $res['role']; ?></h5>
                <h6><?php echo $res['type']; ?></h6>
                <p><?php echo $res['city']; ?></p>
                <a href="job_apply.php?id=<?php echo $res['id']; ?>"><button type="button" class="btn btn-sm">Register</button></a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    
    <!--footer-->
    <footer class="footer mt-auto py-3 ">
      <div class="container">
        <p>SMK BHKATI ANINDYA</p>
      </div>
    </footer>
    <!--akhir footer-->
    
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
