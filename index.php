<?php

require_once "./common/global.php";

$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        echo "Hello GROUP7";
        break;
    case 'admin':
        require_once "./business/quanly/dashboard.php";
        break;
    case 'staff':
        require_once "./business/nhanvien/desk/desk.php";
        break;
    case 'chef':
        require "./business/bep/dashboard.php" ;
        break;
    default:
        echo " Đường dẫn này chưa được định nghĩa";
        break;
}
