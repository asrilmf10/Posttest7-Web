<?php
    require 'config.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM kumpulan_resep WHERE id_resep = '$id'");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])) {
        $n_masakan = $_POST['n-masakan'];
        $a_masakan = $_POST['a-masakan'];
        $b_utama = $_POST['b-utama'];
        $tanggal = $_POST['tanggal'];        
        
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $new_gambar = "$n_masakan.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'gambar/'.$new_gambar)) {
            $update = mysqli_query($db, "UPDATE kumpulan_resep SET nama_masakan='$n_masakan', asal_makanan='$a_masakan', bahan_utama='$b_utama', gambar='$new_gambar', keterangan='$tanggal' WHERE id_resep='$id'");
            if($update) {
                header("Location:resep.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Resep</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gambar">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery.js"></script>
    <style>
        .h-list a.home {
            background-color: #00DEFF;
            color: black;
        }
        .h-list a.home:hover {
            color: white;
        }
        .h-list a.bresep {
            background-color: #00ABE0;
            color: white;
        }
        .h-list a.bresep:hover {
            color: black;
        }
        h4 {
            text-align: center;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .b-resep {
            border: 2px solid;
            border-radius: 25px;
            margin-top: 3px;
            margin-left: 400px;
            margin-right: 400px;
            margin-bottom: 3px; 
        }
        .tanggal {
            margin-top: 5px; 
            margin-bottom: 5px;
        }
        .nama-resep {
            width: 350px;
            height: 25px;
            margin-top: 5px; 
            margin-bottom: 0px;
        }
        .asal-resep {
            width: 350px;
            height: 25px;
            margin-top: 5px; 
            margin-bottom: 0px;
        }
        .bahan-utama {
            width: 350px;
            height: 25px;
            margin-top: 5px; 
            margin-bottom: 0px;
        }
        .resep {
            padding-left: 50px;
        }
        .input {
            width: 75px;
            height: 30px;
            margin-left: 284px;
            margin-bottom: 5px;
            font-size: 18px;
            font-weight: bold;
            border-style: none;
            border-radius: 10px;
            background-color: #00DEFF;
            color: whitesmoke;
        }
        .input:hover {
            background-color: #00ABE0;
            color: black;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="h-list">
                <a class="home" href="index.php">Beranda</a>
                <a class="register" href="register.php">Daftar</a>
                <a class="profil" href="akun.php">Profil</a>
                <a onclick="tentang()" class="aboutMe" href="aboutMe.php">Tentang Saya</a>
                <a class="menu-resep" href="resep.php">Daftar Resep</a>
                <a class="bresep" href="buat.php">Buat Resep</a>
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
        <div class="b-resep">
            <h4>Edit Resep</h4>
            <form action="resep.php" method="post" enctype="multipart/form-data" class="resep">                
                <h5 class="tanggal">Tanggal Edit Resep : <?=date("l, d-m-Y")?></h5>

                <label for="">Nama Masakan : </label> <br>
                <input type="text" name="n-masakan" class="nama-resep"> <br> <br>

                <label for="">Asal Masakan : </label> <br>
                <input type="text" name="a-masakan" class="asal-resep"> <br> <br>

                <label for="">Bahan Utama : </label> <br>
                <input type="text" name="b-utama" class="bahan-utama"> <br> <br>

                <label for="">Gambar Masakan : </label> <br>
                <input type="file" name="gambar" class="gambar"> <br>

                <input type="hidden" name="tanggal" value=<?=date("d-m-Y")?>>
                <input type="submit" name="submit" class="input" value="Simpan">
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="f-teks">
            <p>@Copyright 2022 - by Asril M.F</p>
        </div>
    </div>
</body>
</html>