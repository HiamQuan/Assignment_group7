<?php
require_once "./common/global.php";
require_once "./dao/pdo.php";
$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        require_once "./business/login.php";
        break;
    case 'admin':
        require_once "./business/quanly/result.php";
        index();
        break;
    case 'staff':
        require_once "./business/nhanvien/desk/desk.php";
        loadall_desk();
        break;
    case 'staff/desk':
        require_once "./business/nhanvien/desk/desk.php";
        load_location();
        break;
    case 'staff/order':
        require_once "./business/nhanvien/order/order.php";
        menu_render();
        break;
    case 'staff/order/addtocart':
        require_once "./business/nhanvien/order/order.php";
        add_food();
        break;
    case 'staff/order/delete':
        require_once "./business/nhanvien/order/order.php";
        remove_order_food();
        break;
    case 'staff/order/add-bill':
        require_once "./business/nhanvien/bill/bill.php";
        add_bill();
        break;
    case 'staff/order/bill':
        require_once "./business/nhanvien/bill/bill.php";
        get_bill();
        break;
    case 'staff/order/done-bill':
        require_once "./business/nhanvien/bill/bill.php";
        done_bill();
        break;
    case 'chef':
        require_once "./business/bep/undone.php";
        break;
    case 'chef/done':
        require_once "./business/bep/done.php";
        break;
    default:
        echo " Đường dẫn này chưa được định nghĩa";
        break;
}
