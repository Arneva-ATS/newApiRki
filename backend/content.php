<?php

include "function.php";

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

if($_GET['menu'] == 'simpanan'){
    include "include/simpanan.php";
}

if($_GET['menu'] == 'histori_simpanan'){
    include "include/histori_simpanan.php";
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

if($_GET['menu'] == 'histori_peminjaman'){
    include "include/histori_pinjaman.php";
}

if($_GET['menu'] == 'barang'){
    include "include/barang.php";
}

if($_GET['menu'] == 'tambah_barang'){
    include "include/tambah_barang.php";
}

if($_GET['menu'] == 'kategori_barang'){
    include "include/kategori_barang.php";
}

if($_GET['menu'] == 'tambah_kategori'){
    include "include/tambah_kategori.php";
}

if($_GET['menu'] == 'edit_barang'){
    include "include/edit_barang.php";
}

if($_GET['menu'] == 'view_detail_pinjaman'){
    include "include/view_detail_pinjaman.php";
}

if($_GET['menu'] == 'toko'){
    include "include/toko.php";
}

if($_GET['menu'] == 'tambah_toko'){
    include "include/tambah_toko.php";
}

if($_GET['menu'] == 'summari_simpanan'){
    include "include/summari_simpanan.php";
}

if($_GET['menu'] == 'summari_pinjaman'){
    include "include/summari_pinjaman.php";
}

if($_GET['menu'] == 'cicilan'){
    include "include/cicilan.php";
}

if($_GET['menu'] == 'pemesanan'){
    include "include/pemesanan.php";
}

if($_GET['menu'] == 'cart'){
    include "include/cart.php";
}

if($_GET['menu'] == 'profile'){
    include "include/profile.php";
}

if($_GET['menu'] == 'kas'){
    include "include/kas.php";
}

if($_GET['menu'] == 'tambah_kas'){
    include "include/tambah_kas.php";
}

if($_GET['menu'] == 'pengguna'){
    include "include/pengguna.php";
}
?>