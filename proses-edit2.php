<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $id=$_POST['id'];
    $kode=$_POST['kodebarang'];
    $namabarang=$_POST['namabarang'];
    $hargajual=$_POST['hargajual'];
    $hargabeli=$_POST['hargabeli'];
    $satuan=$_POST['satuan'];
    $kategori=$_POST['kategori'];
    
    $sql = "UPDATE tb_master SET 
    kodebarang='$kode',namabarang='$namabarang',
    hargajual='$hargajual',hargabeli='$hargabeli',satuan='$satuan',kategori='$kategori' WHERE id='$id'";
    $query= mysqli_query($koneksi,$sql);
    if($query){
        header('location:tampil2.php?status=berhasil');
    }    
    }?>