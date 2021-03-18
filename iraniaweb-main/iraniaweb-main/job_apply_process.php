<?php
    include("koneksidatabase.php");

    $namaLengkap = $_POST['nama-lengkap'];
    $nomorKontak = $_POST['nomor-kontak'];
    $jurusan = $_POST['jurusan'];
    $nilaiAkhir = $_POST['nilai-akhir'];
    $jobId = $_POST['job-id'];
    $allowedExtension = array('pdf','doc','docx','jpg','jpeg','png');
    $fileNameRaw = $namaLengkap.'-'.date("Ymd").'-'.$_FILES['cv']['name'];
    $fileName = preg_replace('/\s+/', '-', $fileNameRaw);
    $x = explode('.', $fileName);
    $extension = strtolower(end($x));
    $fileTemp = $_FILES['cv']['tmp_name'];

    if(in_array($extension, $allowedExtension) === true){
        move_uploaded_file($fileTemp, 'dataFile/'.$fileName);
        $result = mysqli_query($conn, "INSERT INTO apply_job (`nama_lengkap`, `nomor_kontak`, `jurusan`, `nilai_akhir`, `cv`, `kategori_job_id`) VALUES ('$namaLengkap', '$nomorKontak', '$jurusan', '$nilaiAkhir', '$fileName', '$jobId')");
        header("location:index.php");
    } else {
        echo 'Error Occured !';
    }
?>