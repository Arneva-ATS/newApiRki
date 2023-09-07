<?php
function convert_user($id){
include "config.php";
$sql = mysqli_query($koneksi,"select * from  pengguna where id = '".$id."'");
$data = mysqli_fetch_array($sql);
return $data['username']??"";
}

function convert_jenis_pinjaman($id){
include "config.php";
$sql = mysqli_query($koneksi,"select * from  jenis_pinjaman where id = '".$id."'");
$data = mysqli_fetch_array($sql);
return $data['nama_jenis_pinjaman']??"";
}

?>