<?php 
   include("koneksidatabase.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css?v=<?php echo time();?>">
    <title>SMK BHAKTI ANINDYA</title>
  </head>
  <body >
  <!--navigation bar-->
    <nav class="navbar shadow-sm p-2 mb-2 bg-white navbar-expand-lg navbar-light fixed-top">
      <div class="container ">
            <a class="navbar-brand" href="login.php"><img class="img-fluid img-page2" src="gambar/Group 17.png ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-link" href="home.php"> <span class="sr-only">(current)</span></a>
              <a class="nav-link" href="#"></a>
              <a class="nav-link" href="#"></a>
              <a class="nav-link" href="#"></a>
              <a class="nav-link" href="#"></a>
            </div>
        </div>
      </div>
    </nav>

    <div class="container " style="margin-top: 50px;">
      <div class="col form_sign">
            <div class="row">
                <div class="gambar_error">
                <img class="img-fluid mx-auto d-block" src="../iraniaweb-main/gambar/Group 23.png" />
                </div>
                <div class="col-8">
                      <a href="login.php"><button type="submit" name="submit" class="btn btn-primary biru_button">Go back</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>