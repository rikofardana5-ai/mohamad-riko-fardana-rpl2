<?php

include 'koneksi.php';

$ProdukID= $_POST['ProdukID'];
$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];

mysqli_query($connect,"update produk set NamaProduk= '$NamaProduk',harga='$Harga',Stok='$Stok' where ProdukID= '$ProdukID'");

header("location:data.php");
?>