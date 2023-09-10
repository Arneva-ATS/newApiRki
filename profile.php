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

                    $details = mysqli_fetch_assoc(mysqli_query($koneksi,"select * from anggota where telphon = '".$row['username']."'")); 
                    
                    $a = array(
                        "id" => $row['id'],
                        "username" => $row['username'],
                        "password" => $row['password'],
                        "token" => $row['token'],
                        "status" => $row['status'],
                        "id_koperasi" => $row['id_koperasi'],
                        "id_toko" => $row['id_toko'],
                        "detail" => $details
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


    