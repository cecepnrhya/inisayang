<?php include("koneksidatabase.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <!-- ===== CSS ===== -->
        <style type="text/css">
            @import url(styles.css);
            
        </style>
        
        <title>Sidebar sub menus</title>
    </head>
    <nav class="navbar shadow-sm p-3 mb-5 bg-white nav_dash ">
        <div class="container">
            <img class="img-fluid img-page2" src="gambar/Group 17.png ">
         
        </div>
      </nav>
    <body id="body-pd">
        
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                <div class="nav__list">
                <a href="dashboard.php" class="nav__link ">
                            <ion-icon name="home-sharp" class="nav__icon"></ion-icon>
                            <span class="nav__name">Dashboard</span>
                        </a>
                        <a href="dashboard_admin.php" class="nav__link">
                            <ion-icon name="documents-sharp" class="nav__icon"></ion-icon>
                            <span class="nav__name">dashboard_admin</span>
                        </a>

                        

                        <a href="dashboard_apply.php" class="nav__link">
                            <ion-icon name="people-sharp" class="nav__icon"></ion-icon>
                            <span class="nav__name">Analytics</span>
                        </a>
                        
                        <a href="dashboard_daftarperusahaan.php" class="nav__link">
                            <ion-icon name="business-sharp" class="nav__icon"></ion-icon>
                            <span class="nav__name">Settings</span>
                        </a>
                        <a href="dashboard_job.php" class="nav__link">
                            <ion-icon name="briefcase-sharp" class="nav__icon"></ion-icon>
                            <span class="nav__name">Settings</span>
                        </a>
                        
                    </div>
                </div>

                <a href="login_admin.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

    
        

          <div class="col-lg ">
            <div class="card bg-black shadow-sm p-3 mb-5 bg-white" style="margin-top: 20px;  border-radius: 8px;"  >  
            
        <a href="tambah_dataperusahaan.php" class="btn btn-md btn-success button_admin" style="margin-bottom: 10px " >TAMBAH DATA</a>
                <table class="table table-light  table-hover">
                <h5 > Data perusahaan</h5>
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      

                      <?php
        $sql = "SELECT * FROM daftar_perusahaan";
        $query = mysqli_query($conn, $sql);
        $noUrut = 0;

        while($siswa = mysqli_fetch_array($query)){
            $noUrut++;
            echo "<tr>";
            echo "<td>".$noUrut."</td>";
            echo "<td>".$siswa['nama_perusahaan']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['email']."</td>";
            
           

            echo "<td>";
            echo "<a href='edit_daftarperusahaan.php?id=".$siswa['id']." '><button >Edit</button></a>  ";
            echo "<a href='proses_hapus.php?id=".$siswa['id']."'><button >Delete</button></a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
                    </tbody>
                  </table>
                  
                
            </div>
        
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="dashboard.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      </body>
    </body>
</html>