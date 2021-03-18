<?php 
session_start();
 
// menghubungkan dengan koneksi
include 'koneksidatabase.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from signup where email='$email' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:index.php?pesan=berhasil");
}

else {
	header("location:error.php?pesan= tidakberhasil");
}

?>


