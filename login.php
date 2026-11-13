<?php
include "koneksi.php";
if(isset($_POST['login'])){
    $username =$_POST['username'];
    $password =$_POST['password'];

    $sql = "SELECT * FROM users  WHERE username= '$username'AND password='$password'";
    $result = $connect->query ($sql);

    if ($result->num_rows > 0) {
        header("Location: beranda.php");
    }else{
        echo "Data tidak ditemukan, silakan daftar terlebih dahulu";
    }
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="styel.css">
</head>
<body>
    <h3>Login Akun</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type"submit" name="login">Login Sekarang</button>
        <div class="form group">


        </div>
    <a href="register.php">Belum punya akun? Daftar di sini</a>
</form>
</body>
</html>