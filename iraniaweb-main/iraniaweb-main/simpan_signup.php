<?php


include 'koneksidatabase.php';

//get data dari form
$id       =$_POST['id'];
$NISN           = $_POST['NISN'];
$Email          = $_POST['Email'];
$Password              = $_POST['Password'];
$Confirm_Password      = $_POST['Confirm_Password'];

//query insert data ke dalam database
$query = "INSERT INTO signup set id='$id', NISN='$NISN', Email='$Email', Password='$Password', Confirm_Password='$Confirm_Password'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
mysqli_query($koneksidatabase, $query);

    //redirect ke halaman index.php 
    header("location: index.php");





?>