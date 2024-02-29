<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:../index.php?pesan=gagal");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Petugas</title>
        <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
</head>
    <body>
        <div class="container">
            <div class="content">