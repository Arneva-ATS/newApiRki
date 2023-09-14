<?php
error_reporting(0);
session_start();
include"config.php";

$un = htmlentities($_POST['username']);
$pw = htmlentities($_POST['password']);

if(!empty($un) OR !empty($pw)){

$sql = mysqli_query($koneksi,"select * from pengguna where username = '".$un."' and password = '".md5($pw)."'");
$data = mysqli_fetch_assoc($sql);
$check = mysqli_num_rows($sql);
    if($check > 0 ){

        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['id_koperasi'] = $data['id_koperasi'];
        $_SESSION['token'] = $data['token'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['id_koperasi'] = $data['id_koperasi'];

        header('location:dashboard.php');

    }else{
        echo "<h3 align='center'> User Tidak Ada Di Database! </h3> <hr> <p align='center'> Ulangi Login <a href='index.php'> Ulangi </a></p>";
    }

}else{
    echo "<h3 align='center'> Login Gagal </h3> <hr> <p align='center'> Ulangi Login <a href='index.php'> Ulangi </a></p>";
}



?>