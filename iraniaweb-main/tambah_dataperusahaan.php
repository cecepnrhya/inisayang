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
              <a class="navbar-brand" href=""><img class="img-fluid img-page2" src="gambar/Group 17.png ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-link" href=""><span class="sr-only">(current)</span></a>
                <a class="nav-link" href="" hidden></a>
                <a class="nav-link" href=""></a>
                <a class="nav-link" href="#"></a>
                <a class="nav-link" href="#"></a>
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

        $nama_perusahaan=input($_POST["nama_perusahaan"]);
        $alamat=input($_POST["alamat"]);
        $email=input($_POST["email"]);
        
        

        //Query input menginput data kedalam tabel anggota
        $sql="insert into daftar_perusahaan (nama_perusahaan,alamat,email) values
		  ('$nama_perusahaan','$alamat','$email')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($conn,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:dashboard_daftarperusahaan.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }
    }
    ?>

<!--form-->
<div class="container " style="margin-top: 100px;">
    <h3 class="tulisan_signup"> Insert New User Admin</h3>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

	              <div class="form-group ">
                    <label for="email">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control shadow p-3 mb-2 bg-white" >
                    <label for="email">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control shadow p-3 mb-2 bg-white" >
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control shadow p-3 mb-2 bg-white" >
                </div>
            
                <div class="row ">
                      <div class="col-12">
                          <button type="submit" name="submit" class="btn btn-primary biru-button">Submit</button>
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