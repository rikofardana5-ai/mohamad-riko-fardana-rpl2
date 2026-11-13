<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="styel.css">
</head>

<body>
    <h3>EDIT DATA PRODUK</h3>
    <?php
    include 'koneksi.php';
    $ProdukID = $_GET['id'];
    $data = mysqli_query($connect, "SELECT * FROM produk WHERE ProdukID='$ProdukID'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="ubah.php">
            <table>
                <tr>
                    <td>Nama Produk</td>
                    <td>
                        <input type="hidden" name="ProdukID" value="<?php echo $d['ProdukID']; ?>">
                        <input type="text" name="NamaProduk" value="<?php echo $d['NamaProduk']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="Harga" value="<?php echo $d['Harga']; ?>"></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" name="Stok" value="<?php echo $d['Stok']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                    <input type="hidden" name="ProdukID" value="<?php echo $d['ProdukID'] ?>">
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>