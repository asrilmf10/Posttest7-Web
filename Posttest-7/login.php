<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body {
            background-image: linear-gradient(to top right, rgb(0, 222, 255), rgb(0, 171, 224));
        }
        .login {
            border: 2px solid;
            border-radius: 25px;
            background-color: #E6F4F1;
            margin: 150px 375px 50px 375px;
            padding: 0px 0px 10px 110px;
        }
        h3 {
            text-align: center;
            padding-right: 110px;
            padding-top: 0px;
        }
        .form-login {
            margin-bottom: 20px;
            border: 1px solid;
            border-radius: 10px;
            width: 285px;
            height: 25px;
        }
        .btn-send {
            border: 1px solid;
            border-radius: 25px;
            width: 290px;
            height: 25px;
            background-color: #00ABE0;
            color: black;
        }
        .btn-send:hover {
            background-color: #00DEFF;
            color: white;
            font-weight: bold;
        }
        .akun a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="login">
            <form action="" method="post">
                <label><h3>Login</h3></label>

                <input type="email" name="email" class="form-login" placeholder="email"><br>

                <input type="password" name="pword" class="form-login" placeholder="password"><br>

                <input type="submit" name="login" class="btn-send" value="LOGIN">
            </form>
            <p class="akun">
                Belum punya akun ? <a href="register.php">Register</a>
            </p>
        </div>
    </div>
</body>
</html>

<?php
    session_start();

    require 'c-akun.php';

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $pword = $_POST['pword'];

        $query = "SELECT * FROM akun WHERE email = '$email'";
        $result = $db->query($query);
        $row = mysqli_fetch_array($result);
        $user = $row['nama'];

        if(password_verify($pword, $row['pword'])) {
            $_SESSSION['login'] = true;

            echo "
                <script>
                    alert('WELCOME $user');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
            <script>
                document.location.href = 'index.php';
            </script>
            ";
        }
    }
?>