<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="styel.css">
</head>

<body>
   
    <h1>Pembelian Produk</h1>
    <a href="beranda.php">Beranda</a>
    <form method="post" action="proses_pembelian.php">
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" required><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" required><br><br>

        <input type="submit" value="Beli">
    </form>

</body>

</html>