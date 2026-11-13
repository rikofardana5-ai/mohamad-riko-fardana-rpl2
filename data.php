
<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <link rel="stylesheet" href="styel.css">
</head>
<body>

<h1>Data Produk</h1>

<a href="tambah.php">Tambah Produk</a>
<a href="beranda.php">Beranda</a>

<table border="1">
    <tr>
        <th>NO</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>OPSI</th>
    </tr>

    <?php
    include 'koneksi.php';

    $no = 1;
    $data = mysqli_query($connect, "SELECT * FROM produk");

    while ($d = mysqli_fetch_array($data)) {
    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['NamaProduk']; ?></td>
        <td><?php echo $d['Harga']; ?></td>
        <td><?php echo $d['Stok']; ?></td>

        <td>
            <a href="update.php?id=<?php echo $d['ProdukID']; ?>">EDIT</a>

            <a href="delete.php?id=<?php echo $d['ProdukID']; ?>">DELETE</a>
        </td>
    </tr>

    <?php } ?>

</table>

</body>
</html>
