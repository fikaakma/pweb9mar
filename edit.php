<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header('location:tampil.php');
}
$id=$_GET['id'];
$sql = "SELECT * FROM tb_penjualan WHERE tb_penjualan.id='$id'";
$query=mysqli_query($koneksi,$sql);
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
<center>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <table border="3">
                <h2>Edit Transaksi</h2>
                <tr>
                    <td><label for="nofaktur">No Faktur: </label></td>
                    <td><input type="text" name="nofaktur"value="<?php echo $data['nofaktur']?>"></td>
                </tr>
                <tr>
                    <td><label for="namakonsumen">Nama Konsumen: </label></td>
                    <td><input type="text" name="namakonsumen"value="<?php echo $data['namakonsumen']?>"></td>
                </tr>
                <tr>
                    <td><label for="jumlah">Jumlah: </label></td>
                    <td><input type="text" name="jumlah"value="<?php echo $data['jumlah']?>"></td>
                </tr>
                <tr>
                    <td><label for="hargasatuan">Harga Satuan: </label></td>
                    <td><input type="text" name="hargasatuan"value="<?php echo $data['hargasatuan']?>"></td>
                </tr>
                <tr>
                    <td><label for="hargatotal">Harga Total: </label></td>
                    <td><input type="text" name="hargatotal"value="<?php echo $data['hargatotal']?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="daftar" value="EDIT"></td>
                </tr>
            </table>
       
    </form> 
</center>
</body>
</html>