<?php
session_start();
include "config.php";

if($_GET['act'] == 'insert_koperasi'){

    mysqli_query($koneksi,"insert into koperasi(kode_koperasi,nama_koperasi,email,alamat,maps,telphon)values('".strtolower($_POST['kode_koperasi'])."','".$_POST['nama_koperasi']."','".$_POST['email']."','".$_POST['alamat']."','".$_POST['maps']."','".$_POST['telphon']."')");
    $idt = mysqli_insert_id($koneksi);
    mysqli_query($koneksi,"insert into pengguna(username,password,token,status,id_koperasi,id_toko)values('".strtolower($_POST['kode_koperasi'])."','".md5(12345)."','null','koperasi','".$idt."','0')");
    header('location:dashboard.php?menu=koperasi');

}

if($_GET['act'] == 'insert_anggota'){

    mysqli_query($koneksi,"insert into anggota(id_koperasi,kode_anggota,nama_anggota,email,telphon)values('".strtolower($_POST['kode_koperasi'])."','".$_POST['kode_anggota']."','".$_POST['nama_anggota']."','".$_POST['email']."','".$_POST['telphon']."')");
    $idt = mysqli_insert_id($koneksi);
    mysqli_query($koneksi,"insert into pengguna(username,password,token,status,id_koperasi,id_toko)values('".strtolower($_POST['kode_anggota'])."','".md5(12345)."','null','anggota','".$idt."','0')");
    header('location:dashboard.php?menu=anggota');

}


?>