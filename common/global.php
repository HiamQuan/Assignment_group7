<?php

// tạo đường dẫn truy cập vào website
session_start();

const BASE_URL = "http://localhost:81/Assignment_group7/";


const ADMIN_URL = "http://localhost:81/Assignment_group7/admin/";
const STAFF_URL = "http://localhost:81/Assignment_group7/staff/";
const CHEF_URL = "http://localhost:81/Assignment_group7/chef/";
const ADMIN_ASSETS = BASE_URL . 'public/adminlte/';
const PUBLIC_ASSETS = "http://localhost:81/Assignment_group7/public/";
const IMAGE_URL = BASE_URL . "public/upload/";
const CSS_URL= BASE_URL . 'public/customize/css/';



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
