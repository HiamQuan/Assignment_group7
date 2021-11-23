<?php

// tạo đường dẫn truy cập vào website
session_start();

const BASE_URL = "http://127.0.0.1/Assignment_group7/";

const NHANVIEN_URL =  "./business/nhanvien/";
const QUANLY_URL = "./business/quanly/";
const BEP_URL = "./business/bep/";
const CSS_URL = BASE_URL . "css/";
const IMAGE_URL = BASE_URL . "images/";
const DAO_URL = "./dao/";
const VIEWS_URL =  "./views/";


// đường dẫn để upload ảnh
$PATH_IMAGE = $_SERVER['DOCUMENT_ROOT'] . IMAGE_URL;

/**
 * hàm save_file dùng để upload file lên sever
 * @tham số: $file tên thẻ input file
 * @tham số: $dir_path đường dẫn để upload file
 * @return tên file upload
 */

function save_file($file, $dir_path)
{
    $file_upload = $_FILES[$file];
    $file_name = $file_upload['name'];
    $dir_file_path = $dir_path . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $dir_file_path);
    return $file_name;
}
