<?php 
    session_start();
    if(isset($_SESSION['login'])) {
        header("Location: buat.php");
        exit;
    }

    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM kumpulan_resep");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST-7 Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gambar">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery.js"></script>
</head>
<body>
    <div class="header">
        <div class="h-list">
                <a class="home" href="index.php">Beranda</a>
                <a class="register" href="register.php">Daftar</a>
                <a class="profil" href="akun.php">Profil</a>
                <a onclick="tentang()" class="aboutMe" href="aboutMe.php">Tentang Saya</a>
                <a class="menu-resep" href="resep.php">Daftar Resep</a>
                <a href="buat.php">Buat Resep</a>
        </div>
    </div>
    <div class="navbar">
        <div class="n-logo">
            <p class="logo">MariMasak</p>
            <p class="teks">Kumpulan Resep Masakan Indonesia</p>
            <input type="text" placeholder="Cari resep...">
            <button class="cari" type="submit"><i class="fa fa-search"></i></button> <br>
            <br> 
            <br> <button class="mode" onclick="myFunction()">Switch Mode</button>
        </div>
    </div>
    <div class="main">
        <div class="contents">
            <div onclick="recipe()" class="c-items">
                <img src="gambar/Gado2.jpg" width="200px">
                <p>Resep Gado-gado</p>
            </div>
            <div onclick="recipe()" class="c-items">
                <img src="gambar/Pecel Lele.jpg" height="112.5px" width="200px">
                <p>Resep Pecel Lele</p>
            </div>
            <div onclick="recipe()" class="c-items">
                <img src="gambar/Rawon.jpg" height="112.5px" width="200px">
                <p>Resep Rawon</p>
            </div>
            <div onclick="recipe()" class="c-items">
                <img src="gambar/Sate.jpg" height="112.5px" width="200px">
                <p>Resep Sate</p>
            </div>
            <div onclick="recipe()" class="c-items">
                <img src="gambar/Soto.jpg" height="112.5px" width="200px">
                <p>Resep Soto</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="f-teks">
            <p>@Copyright 2022 - by Asril M.F</p>
        </div>
    </div>
</body>
</html>