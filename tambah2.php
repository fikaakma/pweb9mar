<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<body> 
     <center>
    <form action="proses-tambah2.php" method="POST">
            <table border="3">
                <h2>Stok Barang</h2>
                <tr>
                    <td><label for="kodebarang">Kode Barang:</label></td>
                    <td><input type="text" name="kodebarang"></td>
                </tr>
                <tr>
                    <td><label for="namabarang">Nama Barang: </label></td>
                    <td><input type="text" name="namabarang"></td>
                </tr>
                <tr>
                    <td><label for="hargajual">Harga Jual: </label></td>
                    <td><input type="text" name="hargajual"></td>
                </tr>
                <tr>
                    <td><label for="hargabeli">Harga Beli: </label></td>
                    <td><input type="text" name="hargabeli"></td>
                </tr>
                <tr>
                    <td><label for="satuan">Satuan: </label></td>
                    <td><input type="text" name="satuan"></td>
                </tr>
                <tr>
                    <td><label for="kategori">Kategori: </label></td>
                    <td><input type="text" name="kategori"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="daftar" value="daftar"></td>
                </tr>
            </table>
       
    </form> 
</center>
</body>
</html>