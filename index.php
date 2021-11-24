<?php

require_once "./common/global.php";
require_once "./dao/pdo.php";

$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        echo "Hello GROUP7";
        break;
    case 'admin':
        require_once "./business/quanly/dashboard.php";
        break;
    case 'cp-nhanvien':
        require_once "./business/nhanvien/desk/desk.php";
        break;
    case 'cp-nhanvien/order':
        require_once "./business/nhanvien/order/order.php";
        menu_render();
        break;
    case 'cp-nhanvien/order/addtocart':
        require_once "./business/nhanvien/order/order.php";
        add_food();
        break;
    case 'cp-nhanvien/order/delete':
        require_once "./business/nhanvien/order/order.php";
        remove_order_food();
        break;
    case 'chef':
        require "./business/bep/dashboard.php" ;
        break;
    default:
        echo " Đường dẫn này chưa được định nghĩa";
        break;
}
