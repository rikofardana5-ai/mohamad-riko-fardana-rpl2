
<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM produk WHERE ProdukID='$id'");

header("location: data.php");
?>
