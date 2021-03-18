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
  <body>

<!--navigation bar-->
<nav class="navbar shadow-sm p-2 mb-2 bg-white navbar-expand-lg navbar-light fixed-top">
        <div class="container ">
              <a class="navbar-brand" href="#"><img class="img-fluid img-page2" src="gambar/Group 17.png ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="login.php" hidden>Jobs</a>
                <a class="nav-link" href="https://bhaktianindya.sch.id/">About</a>
                <a class="nav-link" href=""></a>
                <a class="nav-link" href=""></a>
              </div>
          </div>
        </div>
      </nav>

<!--file proses-->

<?php
//Include file koneksi, untuk koneksikan ke database
    include "koneksidatabase.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $NISN=input($_POST["NISN"]);
        $email=input($_POST["email"]);
        $password=input($_POST["password"]);
        $confirm_password=input($_POST["confirm_password"]);
        

        //Query input menginput data kedalam tabel anggota
        $sql="insert into signup (NISN,email,password,confirm_password) values
		  ('$NISN','$email','$password','$confirm_password')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($conn,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }
    }
    ?>

<!--form-->
<div class="container " style="margin-top: 100px;">
    <h3 class="tulisan_signup"> Create Account</h3>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

	              <div class="form-group ">
                    <label for="email">NISN</label>
                    <input type="text" name="NISN" id="NISN" class="form-control shadow p-3 mb-2 bg-white" >
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control shadow p-3 mb-2 bg-white">
                </div>
            
                <div class="row ">
                      <div class="col-md-2">
                          <label for="inputPassword4" class="form-label"> Confirm Password</label>
                          <input type="password" name="password"  class="form-control shadow p-3 mb-2 bg-white" id="inputPassword4">
                      </div>
                      <div class="col-md-2">
                          <label for="inputPassword4" class="form-label"> Confirm Password</label>
                          <input type="password" name="confirm_password"  class="form-control shadow p-3 mb-2 bg-white" id="inputPassword4">
                      </div>
                      <div class="col-12">
                          <button type="submit" name="submit" class="btn btn-primary biru-button">Submit</button>
                          <a href="login.php"><button type="button" name="login" class="btn btn-outline-primary biru-button">Sign In</button></a>
                      </div>
                </div>
           
                <div class="row">
                    <div class="gambar_signup">
                      <img class="img-fluid mx-auto d-block" src="../skripsi/gambar/Group 19.png" />
                    </div>
                </div> 
    </form>
</div>

</body>
</html>