<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
    <link rel="stylesheet" href="aboutMe.css">
    <link rel="stylesheet" href="gambar">
    <script src="jquery.js"></script>
</head>
<body>
    <div class="header">
        <div class="h-list">
            <a href="index.php">Beranda</a>
            <a href="register.php">Daftar</a>
            <a href="akun.php">Profil</a>
            <a class="aboutMe" href="aboutMe.php">Tentang Saya</a>
            <a class="menu-resep" href="resep.php">Daftar Resep</a>
            <a href="buat.php">Buat Resep</a>
        </div>
    </div>
    <div class="navbar">
        <div class="n-logo">
            <p class="logo">MariMasak</p>
            <p class="teks">Kumpulan Resep Masakan Indonesia</p>
            <p>
                <button onclick="myFunction()">Switch Mode</button>
            </p>
        </div>
    </div>
    <div class="main">
        <table class="biodata" width="545px">
            <tr>
                <td width="150px">Nama</td>
                <td width="50px"> : </td>
                <td width="170px">Asril Muhamad Fahroji</td>
                <td class="profil" rowspan="5" width="90px"><img src="gambar/saya.jpg" width="100px"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td> : </td>
                <td>2009106109</td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td> : </td>
                <td>Informatika</td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td> : </td>
                <td>2020</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td> : </td>
                <td>Membaca Buku</td>
            </tr>
        </table>
    </div>
    <div class="footer">
        <div class="f-teks">
            <p>@Copyright 2022 - by Asril M.F</p>
        </div>
    </div>
</body>
</html>