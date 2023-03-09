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
    <form action="proses-tambah.php" method="POST">
            <table border="3">
                <h2>Transaksi</h2>
                <tr>
                    <td><label for="nofaktur">No Faktor: </label></td>
                    <td><input type="text" name="nofaktur"></td>
                </tr>
                <tr>
                    <td><label for="namakonsumen">Nama Konsumen: </label></td>
                    <td><input type="text" name="namakonsumen"></td>
                </tr>
                <tr>
                    <td><label for="jumlah">Jumlah: </label></td>
                    <td><input type="text" name="jumlah"></td>
                </tr>
                <tr>
                    <td><label for="hargasatuan">Harga Satuan: </label></td>
                    <td><input type="text" name="hargasatuan"></td>
                </tr>
                <tr>
                    <td><label for="hargatotal">Harga Total: </label></td>
                    <td><input type="text" name="hargatotal"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="daftar" value="daftar"></td>
                </tr>
            </table>
       
    </form> 
</center>
</body>
</html>