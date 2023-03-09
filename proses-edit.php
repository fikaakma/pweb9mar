<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $id=$_POST['id'];
    $nofaktur=$_POST['nofaktur'];
    $namakonsumen=$_POST['namakonsumen'];
    $jumlah=$_POST['jumlah'];
    $hargasatuan=$_POST['hargasatuan'];
    $hargatotal=$_POST['hargatotal'];
    
    $sql = "UPDATE tb_penjualan SET nofaktur='$nofaktur',namakonsumen='$namakonsumen',jumlah='$jumlah',hargasatuan='$hargasatuan',hargatotal='$hargatotal' WHERE id='$id'";
    $query= mysqli_query($koneksi,$sql);
    if($query){
        header('location:tampil.php?status=berhasil');
    }    
    }
    ?>