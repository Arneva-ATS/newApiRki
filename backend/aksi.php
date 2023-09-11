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
    mysqli_query($koneksi,"insert into pengguna(username,password,token,status,id_koperasi,id_toko)values('".$_POST['telphon']."','".md5(12345)."','null','anggota','".strtolower($_POST['kode_koperasi'])."','0')");
    header('location:dashboard.php?menu=anggota');

} if($_GET['act'] == 'insert_simpanan'){

    $ambil_anggota = mysqli_fetch_array(mysqli_query($koneksi,"select * from anggota where kode_anggota = '".$_POST['kode_anggota']."'"));
    if($ambil_anggota){
        $ambil_pengguna = mysqli_fetch_array(mysqli_query($koneksi,"select * from pengguna where username = '".$ambil_anggota['telphon']."' AND id_koperasi = '".$_POST['id_koperasi']."'"));
            if($ambil_pengguna){
                $sql1 = mysqli_query($koneksi,"insert into simpanan(id_user,id_koperasi,kode_anggota,simpanan_pokok,simpanan_wajib,simpanan_sukarela)values('".$ambil_pengguna['id']."','".$_POST['id_koperasi']."','".$_POST['kode_anggota']."','".$_POST['simpanan_pokok']."','".$_POST['simpanan_wajib']."','".$_POST['simpanan_sukarela']."')");
                    if($sql1){
                        mysqli_query($koneksi,"insert into riwayat_simpanan(id_user,id_koperasi,kode_anggota,simpanan_pokok,simpanan_wajib,simpanan_sukarela)values('".$ambil_pengguna['id']."','".$_POST['id_koperasi']."','".$_POST['kode_anggota']."','".$_POST['simpanan_pokok']."','".$_POST['simpanan_wajib']."','".$_POST['simpanan_sukarela']."')");
                        header('location:dashboard.php?menu=simpanan');
                    }else{
                        header('location:dashboard.php?menu=simpanan');
                    }
            }else{
                header('location:dashboard.php?menu=simpanan');
            }
    }else{
        header('location:dashboard.php?menu=simpanan');
    }

} if($_GET['act'] == 'approve_pinjaman'){
        $sql1 = mysqli_query($koneksi,"update pinjaman set approve='diterima' where id = '".$_GET['id']."'");
        if($sql1){
                $data = mysqli_fetch_array(mysqli_query($koneksi,"select * from pinjaman where id = '".$_GET['id']."'"));
                    mysqli_query($koneksi,"insert into riwayat_pinjaman(id_user,jumlah_pinjaman,jenis_pinjaman,lama_angsuran,keterangan,approve)values('".$data['id_user']."','".$data['jumlah_pinjaman']."','".$data['jenis_pinjaman']."','".$data['lama_angsuran']."','".$data['keterangan']."','".$data['approve']."')");
                    header('location:dashboard.php?menu=pinjaman');
        }else{
            header('location:dashboard.php?menu=pinjaman');
        }      
}

if($_GET['act'] == 'hapus_riwayat_pinjaman'){
    mysqli_query($koneksi,"delete from riwayat_pinjaman where id = '".$_GET['id']."'");
    header('location:dashboard.php?menu=histori_peminjaman');
}


if($_GET['act'] == 'hapus_riwayat_simpanan'){
    mysqli_query($koneksi,"delete from riwayat_simpanan where id = '".$_GET['id']."'");
    header('location:dashboard.php?menu=histori_simpanan');
}


if($_GET['act'] == 'insert_barang'){
    
    if($_SESSION['status'] == 'koperasi'){

        $temp = explode(".", $_FILES["photo"]["name"]);
        $nf = round(microtime(true));
        $nama_file = $nf.'.'.end($temp);
        $lokasi_file = $_FILES['photo']['tmp_name'];

        if(!empty($lokasi_file)){
            move_uploaded_file($lokasi_file,"barang/".$nama_file);
            $url = $url_live.'/backend/barang/'.$nama_file;
            mysqli_query($koneksi,"insert into pos(kode_barang,nama_barang,stok,harga,photo,keterangan,id_kategori,id_koperasi,flag)values('".$_POST['kode_barang']."','".$_POST['nama_barang']."','".$_POST['stok']."','".$_POST['harga']."','".$url."','".$_POST['keterangan']."','".$_POST['id_kategori']."','".$_POST['id_koperasi']."','null')");
            header('location:dashboard.php?menu=barang');
        }else{
            header('location:dashboard.php?menu=barang');
        }

    } if($_SESSION['status'] == 'rki'){

        $temp = explode(".", $_FILES["photo"]["name"]);
        $nf = round(microtime(true));
        $nama_file = $nf.'.'.end($temp);
        $lokasi_file = $_FILES['photo']['tmp_name'];

        if(!empty($lokasi_file)){
            move_uploaded_file($lokasi_file,"barang/".$nama_file);
            $url = $url_live.'/backend/barang/'.$nama_file;
            mysqli_query($koneksi,"insert into pos(kode_barang,nama_barang,stok,harga,photo,keterangan,id_kategori,id_koperasi,flag)values('".$_POST['kode_barang']."','".$_POST['nama_barang']."','".$_POST['stok']."','".$_POST['harga']."','".$url."','".$_POST['keterangan']."','".$_POST['id_kategori']."','1','rki')");
            header('location:dashboard.php?menu=barang');
        }else{
            header('location:dashboard.php?menu=barang');
        }


    }


}
?>