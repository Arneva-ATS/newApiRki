<?php
        header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Credentials: true");
		header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
		header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
        header("Content-Type: application/json; charset=utf-8");
        
        include "config.php";

        $sql = mysqli_query($koneksi,"select * from pengguna where token = '".$_GET['token']."'");
        $row = mysqli_fetch_assoc($sql);
        $check = mysqli_num_rows($sql);
            
            if($check > 0){

                $data = json_decode(file_get_contents("php://input"),true);

                $cek_bayar = mysqli_fetch_array(mysqli_query($koneksi,"select * from pinjaman where id_user = '".$row['id']."' and status_lunas = 'belum_lunas'"));
                    if($cek_bayar['jumlah_pinjaman'] <= $cek_bayar['sisa_pinjaman']){

                        $insert = mysqli_query($koneksi,"insert into pinjaman(id_user,jumlah_pinjaman,jenis_pinjaman,lama_angsuran,keterangan)values('".$row['id']."','".$data['jumlah_pinjaman']."','".$data['jenis_pinjaman']."','".$data['lama_angsuran']."','".$data['keterangan']."')");
                        if($insert){
                            echo json_encode(
                                array(
                                    'response_code' => 200,
                                    'message' => 'Success'
                                )
                            );
                        }else{

                            echo json_encode(
                                array(
                                    'response_code' => 401,
                                    'message' => 'Failed'
                                )
                            );
                        }

                    }else{

                        echo json_encode(
                            array(
                                'response_code' => 200,
                                'message' => 'Pinjaman Sudah Selesai'
                            )
                        );
                    }

                 	
            }else{
            echo json_encode(
                array(
                    'response_code' => 401,
                    'message' => 'Gagal Kirim Data!'
                )
                );
            }
                
    ?>