<?php include("koneksidatabase.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <nav class="navbar shadow-sm p-2 mb-2 bg-white navbar-expand-lg navbar-light fixed-top">
      <div class="container ">
        <a class="navbar-brand" href="#"><img class="img-fluid img-page2" src="gambar/Group 17.png "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Jobs</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Career Blog</a>
            <a class="nav-link" href="#">Contact Us</a>
          </div>
        </div>
      </div>
    </nav>

    <?php
      error_reporting (0);
      $id = $_GET['id'];
      $result = mysqli_query($conn, "SELECT * FROM kategori_job WHERE `id` = $id");
    ?>
    
    <div class="container " style="margin-top: 50px;">
      <div class="col apply_job">
        <?php while ($res = mysqli_fetch_array($result)) { ?>
          <h2 class=""> <?php echo $res['role']; ?> - <?php echo $res['city']; ?> - <?php echo $res['type']; ?> </h2>
          <p><?php echo $res['job_details']; ?></p>
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Job Description:</h5>
                  <?php echo $res['job_description']; ?>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Requirements:</h5>
                  <?php echo $res['job_requirements']; ?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <form class="form-apply" action="job_apply_process.php" method="POST" enctype="multipart/form-data">
          <div class="input-group mb-3 job_form">
            <div class="input-group-prepend">
            </div>
            <input type="text" name="nama-lengkap" class="form-control" placeholder="Nama lengkap" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" name="nomor-kontak" class="form-control" placeholder="Nomor_kontak" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" name="nilai-akhir" class="form-control" placeholder="Nilai akhir" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          <div class="input-group mb-3">
            <input type="file" name="cv" class="form-control" id="inputGroupFile01" required>
          </div>
          <input type="hidden" name="job-id" value="<?php echo $id; ?>">
          <button type="submit" name="register" class="btn btn-primary biru-button"> Submit</button></a>
        </form>
      </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>