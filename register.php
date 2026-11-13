<?php
include "koneksi.php";
if(isset($_POST['register'])){
    $username =$_POST['username'];
    $password =$_POST['password'];

    $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
    if($connect->query($sql)){
        echo "DATA BERHASIL DITAMBAHLKAN";
    }else{
        echo "DATA GAGAL DITAMBAHKAN";
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
     <h3>Daftar Akun</h3>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="text" placeholder="password" name="password">
        <button type="submit" name="register">Daftar</button>
        <a href="login.php">Sudah punya akun? Login di sini</a>
    </form>

</body>
</html>