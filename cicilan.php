<?php

        header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Credentials: true");
		header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
		header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
        header("Content-Type: application/json; charset=utf-8");
        
        include "config.php";

        $sql = mysqli_query($koneksi,"select * from pengguna where token = '".$_GET['token']."'");
        $rows = mysqli_fetch_assoc($sql);
        $check = mysqli_num_rows($sql);
            
            if($check > 0){
        
                $sql2 = mysqli_query($koneksi,"select * from pembayaran_pinjaman where id_user = '".$rows['id']."' and id_pinjaman = '".$_GET['id_pinjaman']."'");
                $count = mysqli_num_rows($sql2);
                if($count > 0){
                    $cc = $count + 1 ;
                }else{
                    $cc = 0 ;
                }

                echo json_encode(
                    array(
                        'response_code' => 200,
                        'data' => $cc
                    )
                );
        	
            }else{
            echo json_encode(
                    array(
                        'response_code' => 401,
                        'message' => 'Failed Generare Image!'
                    )
                );
            }
        
                
?>