<?php

require_once './global.php';
require_once './dao/pdo.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        echo "Hello GROUP7";
        break;
    case 'quanly':
        require_once $ADMIN_URL."/dashboard.php";
        break;
    case 'nhanvien':
        require_once $NHANVIEN_URL."/desk/desk.php";
        break;
    case 'bep':
        require_once $BEP_URL."/dashboard.php" ;
        break;
    default:
        echo " Đường dẫn này chưa được định nghĩa";
        break;
}
