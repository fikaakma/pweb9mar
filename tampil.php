<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form Tampil</title>
</head>
<body>
    <center>
    <h1>APLIKASI PENJUALAN "NINE MART"</h1>
    <br>
    <h2>Data Barang</h2>
    <br>
    <a href="tambah.php"><input type="button" value="Tambah"></a>
    <p></p>
    <table border="1">
        <tr>
            <td>No</td>
            <td>No Faktur</td>
            <td>Nama Konsumen</td>
            <td>Jumlah</td>
            <td>Harga Satuan</td>
            <td>Harga Total</td>
            <td>Aksi Anda</td>
        </tr>
        <?php
        include("koneksi.php");
        $query=mysqli_query($koneksi, "SELECT * FROM tb_penjualan");
        $no = 1;
        while($jual=mysqli_fetch_array($query)){
            echo"<tr>";
            echo"<td>".$no++."</td>";
            echo"<td>".$jual['nofaktur']."</td>";
            echo"<td>".$jual['namakonsumen']."</td>";
            echo"<td>".$jual['jumlah']."</td>";
            echo"<td>".$jual['hargasatuan']."</td>";
            echo"<td>".$jual['hargatotal']."</td>";
            echo"<td>";
            echo"<a href='edit.php?id=".$jual['id']."'>Edit |</a>";
            echo"<a href='hapus.php?id=".$jual['id']."'>Hapus</a>";
            "</td>";
            "</tr>";
        }
        ?>
    </table>
        <p>
        <a href="index.php"><input type="button" value="Back"></a>
    </center>
</body>
</html>