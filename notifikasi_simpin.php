<?php
        header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Credentials: true");
		header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
		header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
        header("Content-Type: application/json; charset=utf-8");
        
        include "config.php";

            $sql = mysqli_query($koneksi,"select * from pengguna where token = '".$_GET['token']."'");
            $check = mysqli_num_rows($sql);
            
            if($check > 0){

                    $amount = mysqli_num_rows(mysqli_query($koneksi,"select * from pinjaman where approve = 'ditolak'")); 
                    
                    $a = array(
                        'response_code' => 200,
                        "amount" => $amount
                    );
                echo json_encode($a);

            }else{
                echo json_encode(
                    array(
                        'response_code' => 401,
                        'message' => 'Gagal Mengambil Data!'
                    )
                    );
                }
           
            

?>