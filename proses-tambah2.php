<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $kode=$_POST['kodebarang'];
    $namabarang=$_POST['namabarang'];
    $hargajual=$_POST['hargajual'];
    $hargabeli=$_POST['hargabeli'];
    $satuan=$_POST['satuan'];
    $kategori=$_POST['kategori'];
    $sql="INSERT INTO tb_master(kodebarang,namabarang,hargajual,hargabeli,satuan,kategori) 
    Values ('$kode','$namabarang','$hargajual', '$hargabeli', '$satuan','$kategori')";
    $query=mysqli_query($koneksi,$sql);

    if($query){
        header("location:tampil2.php?status:sukses");
    }else{
        header("location:tampil2.php?status:gagal");
    }
}
?>