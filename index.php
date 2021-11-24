<?php

require_once "./common/global.php";
require_once "./common/helpesr.php";
require_once "./dao/pdo.php";


$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        echo "Hello GROUP7";
        break;
    case 'admin':
        require_once "./business/quanly/dashboard.php";
        food_index();
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
