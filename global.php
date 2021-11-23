<?php

// tạo đường dẫn truy cập vào website
session_start();
$ADMIN_URL = "./quanly";
$NHANVIEN_URL = "./nhanvien/";
$BEP_URL = "./bep";
$IMAGE_URL = "./images";

 function admin_render($viewpath, $data =[]) {
     global $NHANVIEN_URL;
    extract($data);
    $VIEW_PAGE = $NHANVIEN_URL . $viewpath;
    include_once  './nhanvien/layout.php';
 }


// đường dẫn để upload ảnh
$PATH_IMAGE = $_SERVER['DOCUMENT_ROOT'] . $IMAGE_URL;

/**
 * hàm save_file dùng để upload file lên sever
 * @tham số: $file tên thẻ input file
 * @tham số: $dir_path đường dẫn để upload file
 * @return tên file upload
 */

 function save_file($file,$dir_path){
     $file_upload = $_FILES[$file];
     $file_name = $file_upload['name'];
     $dir_file_path = $dir_path . $file_name;
     move_uploaded_file($file_upload['tmp_name'], $dir_file_path);
     return $file_name;
 }