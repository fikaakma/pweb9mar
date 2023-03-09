<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $nofaktur=$_POST['nofaktur'];
    $namakonsumen=$_POST['namakonsumen'];
    $jumlah=$_POST['jumlah'];
    $hargasatuan=$_POST['hargasatuan'];
    $hargatotal=$_POST['hargatotal'];
    $sql="INSERT INTO tb_penjualan(nofaktur,namakonsumen,jumlah,hargasatuan,hargatotal) 
    Values ('$nofaktur','$namakonsumen','$jumlah', '$hargasatuan', '$hargatotal')";
    $query=mysqli_query($koneksi,$sql);

    if($query){
        header("location:tampil.php?status:sukses");
    }else{
        header("location:tampil.php?status:gagal");
    }
}
?>