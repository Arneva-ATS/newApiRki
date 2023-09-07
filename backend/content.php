<?php
if($_GET['menu'] == ''){
    include "include/main.php";
}

if($_GET['menu'] == 'anggota'){
    include "include/anggota.php";
}

if($_GET['menu'] == 'tambah_anggota'){
    include "include/tambah_anggota.php";
}

if($_GET['menu'] == 'edit_anggota'){
    include "include/edit_anggota.php";
}

if($_GET['menu'] == 'koperasi'){
    include "include/koperasi.php";
}

if($_GET['menu'] == 'tambah_koperasi'){
    include "include/tambah_koperasi.php";
}

if($_GET['menu'] == 'edit_koperasi'){
    include "include/edit_koperasi.php";
}

if($_GET['menu'] == ''){
    include "include/simpanan.php";
}

if($_GET['menu'] == 'tambah_simpanan'){
    include "include/tambah_simpanan.php";
}

if($_GET['menu'] == 'edit_simpanan'){
    include "include/edit_simpanan.php";
}

if($_GET['menu'] == 'pinjaman'){
    include "include/pinjaman.php";
}

?>