<?php
    $koneksi = mysqli_connect("localhost","deboot","deboot123","centauri");

    $sRole = $_GET['role'];
    $sType = $_GET['type'];
    $sCity = $_GET['city'];

    $result = mysqli_query($koneksi, "SELECT * FROM kategori_job");
    while ($obj = mysqli_fetch_array($result)) {
        echo $obj['city']."\n";
    }
?>