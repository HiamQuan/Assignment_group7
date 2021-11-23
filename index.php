<?php

require_once "./global.php";

$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        echo "Hello GROUP7";
        break;
    case 'admin':
        require_once QUANLY_URL."dashboard.php";
        break;
    case 'staff':
        require_once NHANVIEN_URL."desk/desk.php";
        break;
    case 'chef':
        require BEP_URL."dashboard.php" ;
        break;
    default:
        echo " Đường dẫn này chưa được định nghĩa";
        break;
}
