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
                
                $sql2 = mysqli_query($koneksi,"select * from simpanan where id_user = '".$row['id']."'  order by id asc");
                $data = mysqli_fetch_assoc($sql2);
                $row = $data;

                echo json_encode(
                    array(
                        'response_code' => 200,
                        'message' => 'Data Berhasil Ditampilkan',
                        'data' => $row
                    )
                );
        	
            }else{
                echo json_encode(
                    array(
                        'response_code' => 401,
                        'message' => 'Gagal Mengambil Data!'
                    )
                    );
                }
           
            

?>