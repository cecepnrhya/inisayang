<?php

include("koneksidatabase.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM kategori_job WHERE id=$id";
    $ini = mysqli_query($conn, $sql);

    // apakah query hapus berhasil?
    if( $ini ){
        header('Location: dashboard_job.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>