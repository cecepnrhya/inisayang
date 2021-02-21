<?php 
    error_reporting (0);
  include("koneksidatabase.php");

  // ambil data dari formulir
  
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  
  // buat query update
  $sql = "UPDATE signup SET password='$password', confirm_password='$confirm_password',  WHERE id=$id";
  $query = mysqli_query($conn, $sql);

  // apakah query update berhasil?
  if( $query ) {
      // kalau berhasil alihkan ke halaman list-siswa.php
      header('Location: login.php');
  }





?>