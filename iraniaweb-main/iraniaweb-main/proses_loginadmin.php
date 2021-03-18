<?php 
session_start();
 
// menghubungkan dengan koneksi
include 'koneksidatabase.php';
 
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from login_admin where nama='$nama' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
	header("location:dashboard.php?pesan=berhasil");
}

else {
	header("location:error.php?pesan= tidakberhasil");
}

?>


