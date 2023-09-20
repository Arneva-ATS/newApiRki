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
                
                $data = json_decode(file_get_contents("php://input"),true);
                $qqq = mysqli_fetch_array($sql);

                $dir = "upload/".date("dmYHis").".jpeg";
                $exp = explode(",",$data['photo']);
                $convert = base64_decode($exp[1],true);
                $im = imagecreatefromstring($convert);
                if($im !== false){
                        header('Content-Type: image/jpeg');
                        $percent = 0.5;
                        $width = imagesx($im);
                        $height = imagesy($im);
                        $newwidth = $width * $percent;
                        $newheight = $height * $percent;
                        $image = imagecreatetruecolor($newwidth,$newheight);
                        imagecopyresized($image,$im,0,0,0,0,$newwidth,$newheight,$width,$height);
                        imagejpeg($image,$dir);
                        imagedestroy($image);
                        $url = $url_live.'/'.$dir;
                        $sql2 = mysqli_query($koneksi,"insert into pembayaran_pinjaman(id_user,id_koperasi,id_pinjaman,jumlah_pinjaman,no_rekening,keterangan,photo)values('".$data['id_user']."','".$qqq['id_koperasi']."','".$data['id_pinjaman']."','".$data['jumlah_pinjaman']."','".$data['no_rekening']."','".$data['keterangan']."','".$url."')");
                        if($sql2){
                            echo json_encode(
                                array(
                                    'response_code' => 200,
                                    'message' => 'Success Insert Data',
                                    'data' => $qqq
                                )
                            );
                        }else{
                            echo json_encode(
                                array(
                                    'response_code' => 401,
                                    'message' => 'Failed Insert Data',
                                )
                            );
                        }
        	
            }else{
                echo json_encode(
                    array(
                        'response_code' => 401,
                        'message' => 'Failed Generare Image!'
                    )
                    );
                }
        }
                
?>