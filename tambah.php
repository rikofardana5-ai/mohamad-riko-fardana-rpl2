<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="styel.css">
</head>
<body>
    <link rel="stylesheet" href="style.css">
        <h3>TAMBAH PRODUK</h3>
        <form method="post" action="tambah_aksi.php">
            <table>
                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" name="NamaProduk"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="Harga"></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" name="Stok"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
</body>
</html>