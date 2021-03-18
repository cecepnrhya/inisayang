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

     <!--form-->
  <div class="container " style="margin-top: 50px;">
      <div class="col form_sign">
        <h3 class="tulisan_signup">Edit Admin </h3>

        <form action="" method="POST">
          <form action="" class="main-form needs-validation" novalidate>
              <div class="form-group  ">
                <label for="email">NISN</label>
                <input type="text" name="NISN" id="NISN" class="form-control shadow p-3 mb-2 bg-white" >
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control shadow p-3 mb-2 bg-white" >
              </div>
              <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary biru-button">Submit</button>
              </div>
          </form>

          <?php
          if(isset($_POST['submit'])) {
            if(mysqli_query($conn,"UPDATE signup SET email='$_POST[email]'  WHERE NISN='$_POST[NISN]'")) {
                header('Location: dashboard.php');
          }
          if(empty($_POST['NISN']) )
          {
              header('Location: error.php');
          }
          }
          ?>
              <div class="row">
                <div class="gambar_sign">
                  <img class="img-fluid mx-auto d-block" src="../skripsi/gambar/Group 18.png" />
                </div>
              </div>

        </form>

      </div>
  </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>