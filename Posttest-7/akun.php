<?php
    require 'c-akun.php';

    $result = mysqli_query($db, "SELECT * FROM akun");

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pword = $_POST['pword'];

        $kirim = mysqli_query($db, "INSERT INTO akun (nama, email, pword) VALUES ('$nama', '$email', '$pword')");
        if($kirim) {
            header("Location:index.php");
        } else {
            echo "INVALID !!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKUN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gambar/profil.png">
    <style>
        .h-list a.profil {
            background-color: #00ABE0;
            color: white;
        }
        .h-list a.profil:hover {
            color: black;
        }
        .h-list a.home {
            background-color: #00DEFF;
            color: black;
        }
        .h-list a.home:hover {
            color: white;
        }
        .tabel {
            border: 2px solid;
            border-radius: 15px;
            margin-top: 5px;
            margin-left: 425px;
            margin-right: 200px;
            margin-bottom: 5px;
            padding-left: 5px;
        }
        .n-logo {
            padding: 15px;
        }
        .m-profil {
            text-align: center;
            margin-bottom: 10px;
        }
        .logout {
            text-decoration: none;
            margin-left: 600px;
            border: 2px solid;
            border-radius: 15px;
            padding: 2px 4px 2px 4px;
            background-color: #00ABE0;
            color: black; 
        }
        .logout:hover {
            border: 2px solid #00DEFF;
            background-color: #00DEFF;
            color: white;
            font-weight: bold;
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
                <a href="buat.php">Buat Resep</a>
        </div>
    </div>
    <div class="navbar">
        <div class="n-logo">
            <p class="logo">MariMasak</p>
            <p class="teks">Kumpulan Resep Masakan Indonesia</p>
        </div>
    </div>
    <div class="main">
        <h3 class="m-profil">Profil Anda</h3>
        <table class="tabel">
            <?php
                $row = mysqli_fetch_array($result); 
            ?>
            <tr>
                <td width="65px">Nama</td>
                <td width="10px">: </td>
                <td width="185px"><?=$row['nama']?></td>
                <td class="profil" rowspan="5" width="50px"><img src="gambar/profil.png"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: </td>
                <td><?=$row['email']?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: </td>
                <td><?=$row['pword']?></td>
            </tr>
        </table>
        <div> <br>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>
    <div class="footer">
        <div class="f-teks">
            <p>@Copyright 2022 - by Asril M.F</p>
        </div>
    </div>
</body>
</html>