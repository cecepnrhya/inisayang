<?php
    include("koneksidatabase.php");

    $role = $_POST['role'];
    $type = $_POST['type'];
    $city = $_POST['city'];
    $job_details = $_POST['job_details'];
    $job_description = $_POST['job_description'];
    $job_requirement = $_POST['job_requirements'];

    echo $role;
    echo $type;
    echo $city;
    echo $job_details;
    echo $job_description;
    echo $job_requirements;

    $result = mysqli_query($conn, "INSERT INTO kategori_job (`role`, `type`, `city`, `job_details`, `job_description`, `job_requirement`) VALUES ('$role', '$type', '$city', '$job_details', '$job_description', '$job_requirement')");
    header("location:index.php");
?>