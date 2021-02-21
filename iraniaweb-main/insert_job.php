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
                <a class="nav-link" href="home.php"><span class="sr-only"></span></a>
                <a class="nav-link" href="login.php" hidden></a>
                <a class="nav-link" href="https://bhaktianindya.sch.id/"></a>
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

        $role=input($_POST["role"]);
        $type=input($_POST["type"]);
        $city=input($_POST["city"]);
        $job_details=input($_POST["job_details"]);
        $job_description=input($_POST["job_description"]);
        $job_requirement=input($_POST["job_requirements"]);
       
        

        //Query input menginput data kedalam tabel anggota
        $sql="insert into kategori_job (role,type,city,job_details,job_description,job_requirements) values
		  ('$role','$type','$city','$job_details','$job_description','$job_requirements')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($conn,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:dashboard.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }
    }
    ?>

<!--form-->
<div class="container " style="margin-top: 100px;">
    <h3 class="tulisan_signup"> Insert for new job</h3>
    <form class= "insert_job"  method="POST">

	              <div class="form-group ">
                <div class="insert_job">
                    <label for="email">Role</label>
                    <input type="text" name="role" id="role" class="form-control shadow p-3 mb-2 bg-white" >
                    <label for="email">Type</label>
                    <input type="text" name="type" id="type" class="form-control shadow p-3 mb-2 bg-white">
                    <label for="email">City</label>
                    <input type="text" name="city" id="city" class="form-control shadow p-3 mb-2 bg-white">
                    <label for="email">Job detail</label>
                    <input type="text" name="job_details" id="job_details" class=" form-control shadow p-3 mb-2 bg-white " >
                    <label for="email">job description</label>
                    <input type="text" name="job_description" id="job_description" class="form-control shadow p-3 mb-2 bg-white">
                    <label for="email">Job requirement</label>
                    <input type="text" name="job_requirements" id="job_requirements" class="form-control shadow p-3 mb-2 bg-white">
                </div>  
                </div>
            
                <div class="row ">
                      <div class="col-12">
                          <button type="submit" name="submit" class="btn btn-primary insert-button">Submit</button>
                </div>
    </form>
                <div class="row">
                    <div class="gambar_insert">
                      <img class="img-fluid mx-auto d-block" src="../iraniaweb-main/gambar/Group 25.png" />
                    </div>
                </div> 
           
                
    
</div>

</body>
</html>